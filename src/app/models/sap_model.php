<?php

class sap_model extends Model {
    public function __construct() {
        $this->load_library('db_lib');
    }

    public function registerEntry($data) {
        // Optional form field
        $organisedEvent = isset($data['organised-event']) ? $data['organised-event'] : NULL;

        return $this->db_lib->prepared_execute(
            $this->DB->sap,
            'INSERT INTO `sap_ambassadors` (
                `name`, `email`, `phone_number`, `college`, `program_of_study`, `year_of_study`,
                `facebook_profile_link`, `why_apply`, `about_you`, `organised_event`
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            'ssssssssss', [
                $data['name'], $data['email'], $data['phone-number'], $data['college'], $data['program-of-study'],
                $data['year-of-study'], $data['facebook-profile-link'], $data['why-apply'],
                $data['about-you'], $organisedEvent
            ],
            false
        );
    }

    public function check_credentials($username, $password) {
        $stmt = $this->db_lib->prepared_execute(
            $this->DB->sap,
            'SELECT `id`, `password_hash` FROM `sap_users` WHERE `username`=?',
            's',
            [$username]
        );
        $row = $stmt->get_result()->fetch_row();
        if (! $row) {
            return false;
        }
        if(password_verify($password, $row[1])) {
            return $row[0];
        }
        return false;
    }

    public function is_admin($username) {
        $stmt = $this->db_lib->prepared_execute(
            $this->DB->sap,
            'SELECT `is_admin` FROM `sap_users` WHERE `username`=?',
            's',
            [$username]
        );
        $row = $stmt->get_result()->fetch_row();
        if (! $row) {
            return false;
        }
        return boolval($row[0]);
    }

    public function get_missions() {
        $result = $this->DB->sap->query(
            'SELECT `id`, `level`, `title`, `description` FROM `sap_missions` ' .
            'ORDER BY level ASC, id ASC'
        );
        $missions = $result->fetch_all(MYSQLI_ASSOC);
        return $missions;
    }

    public function get_mission($id) {
        $stmt = $this->db_lib->prepared_execute(
            $this->DB->sap,
            'SELECT `level`, `title`, `description` FROM `sap_missions` WHERE `id`=?',
            'i',
            [$id]
        );
        $row = $stmt->get_result()->fetch_assoc();
        if ($row) {
            $row['id'] = $id;
            return $row;
        }
        return false;
    }

    public function create_mission($title, $level, $points, $description) {
        $stmt = $this->db_lib->prepared_execute(
            $this->DB->sap,
            'INSERT INTO `sap_missions` (`title`, `level`, `points`, `description`) ' .
            'VALUES (?, ?, ?, ?)',
            'ssss',
            [$title, $level, $points, $description]
        );
        if (! $stmt) {
            return false;
        }
        return $stmt->insert_id;
    }

    public function get_tasks($mission_id) {
        $stmt = $this->db_lib->prepared_execute(
            $this->DB->sap,
            'SELECT `id`, `description`, `has_text_answer` FROM `sap_tasks` WHERE `mission_id`=? ORDER BY id ASC',
            'i',
            [$mission_id]
        );
        $tasks = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $tasks;
    }

    public function create_task($mission_id, $description, $has_text_answer) {
        $stmt = $this->db_lib->prepared_execute(
            $this->DB->sap,
            'INSERT INTO `sap_tasks` (`mission_id`, `description`, `has_text_answer`) ' .
            'VALUES (?, ?, ?)',
            'isi',
            [$mission_id, $description, $has_text_answer]
        );
        return boolval($stmt);
    }

    public function submit_task($task_id, $user_id, $text_answer) {
        if ($text_answer) {
            $stmt = $this->db_lib->prepared_execute(
                $this->DB->sap,
                'INSERT INTO `sap_task_submissions` (`task_id`, `user_id`, `answer`) ' .
                'VALUES (?, ?, ?)',
                'iis',
                [$task_id, $user_id, $text_answer]
            );
        } else {
            $stmt = $this->db_lib->prepared_execute(
                $this->DB->sap,
                'INSERT INTO `sap_task_submissions` (`task_id`, `user_id`) ' .
                'VALUES (?, ?)',
                'ii',
                [$task_id, $user_id]
            );
        }
        return boolval($stmt);
    }

    public function get_task_submissions($user_id, $mission_id) {
        $query = <<<SQL
SELECT `task_id`, `done`, `answer`
FROM `sap_task_submissions`
INNER JOIN `sap_tasks`
ON `sap_tasks`.`id` = `sap_task_submissions`.`task_id`
WHERE `user_id`=? AND `sap_tasks`.`mission_id`=?
SQL;
        $stmt = $this->db_lib->prepared_execute(
            $this->DB->sap,
            $query,
            'ii',
            [$user_id, $mission_id]
        );
        $submissions = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $submissions;
    }
}
