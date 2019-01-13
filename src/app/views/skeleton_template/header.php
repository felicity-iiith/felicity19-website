<?php
if (empty($is_ajax)):
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="keywords" content="felicity, felicty18, college, fest, threads, pulsation, iiit, iiith, international, institute, information, technology, hyderabad">
    <meta name="description" content="<?= __("Felicity is the annual technical and cultural fest of IIIT-H. Includes technical, cultural and literary events, Major nights, talks, workshops and performances. We, at IIIT-H, believe in giving back to the society and use Felicity as a medium to serve this motive and pickup various social initiatives.") ?>">
    <meta property="og:description" content="<?= __("Felicity is the annual technical and cultural fest of IIIT-H. Includes technical, cultural and literary events, Major nights, talks, workshops and performances. We, at IIIT-H, believe in giving back to the society and use Felicity as a medium to serve this motive and pickup various social initiatives.") ?>">
    <meta property="og:title" content="<?= isset($title) ? $title . ' · ' : '' ?><?= __('Felicity') ?> · <?= __('IIIT-H') ?>">
    <meta property="og:image" content="<?= base_url() . (isset($og_image) ? $og_image : 'files/17/poster-17.jpg') ?>" style="z-index: 3">

    <?php
    global $cfg;
    $path = empty($_SERVER['PATH_INFO']) ? '/' : $_SERVER['PATH_INFO'];
    $lang_prefix = explode('_', setlocale(LC_ALL, "0"))[0];

    if (strpos($path, $lang_prefix) === 1) {
        $path = substr($path, strlen($lang_prefix) + 1);
    }

    $lang_list = isset($cfg['i18n']['languages']) ? $cfg['i18n']['languages'] : [];
    ?>
    <?php if ($lang_list): ?>
        <link rel="alternate" href="<?= base_url() . substr($path, 1) ?>" hreflang="x-default" />
        <?php foreach ($lang_list as $lang => $locale): ?>
        <link rel="alternate" href="<?= base_url() . $lang . $path ?>" hreflang="<?= $lang ?>" />
        <?php endforeach; ?>
    <?php endif; ?>

    <title><?= isset($title) ? $title . ' · ' : '' ?><?= __('Felicity') ?> · <?= __('IIIT-Hyderabad') ?></title>

    <link rel="icon" href="<?= base_url() ?>favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/styles/vendor/pure-forms-tables-buttons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/styles/new.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/styles/vendor/felicons.css">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">-->
    <link rel="stylesheet" href="<?= base_url() ?>static/styles/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>
    <script src="<?= base_url() ?>static/scripts/vendor/jquery.min.js"></script>
    <script type="text/javascript">
        var baseUrl = '<?= base_url() ?>';
        var localeBaseUrl = '<?= locale_base_url() ?>';
    </script>
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            font-family: 'Exo', sans-serif;
            background: url('felicity hero large.png');
        }

        .container {
            position: absolute;
            bottom: 1rem;
        }

        .grid-item {
            height: 37.5vh;
            width: 15vw;
            background-color: #000;
            clip-path: polygon(0 0, 100% 0, 100% 95%, 85% 100%, 0 100%);
            display: inline-block;
            margin: 0 2vw;
        }

        .grid-content {
            background-color: rgba(255, 0, 0, 0.9);
            height: 2%;
            color: #EEEEEE;
            font-size: 2.5rem;
            transition: height linear 0.3s;
            text-align: center;
            line-height: 0.8;
        }

        .grid-image img {
            transition: transform linear 0.2s;
        }

        .grid-item:hover .grid-image img {
            transform: scale(1.2);
        }

        .grid-item:hover .grid-content {
            height: 100%;

        }
    </style>
</head>
<?php
    if (!isset($page_slug)) {
        $page_slug = 'static';
    }
?>

<body style="overflow: hidden;">
  <?php if (isset($is_authenticated)): ?>
    <div class="auth-quick-links">
        <?php if ($is_authenticated): ?>
            <?php if (!empty($user_nick)): ?>
                <div class="nick"><?= sprintf(__('Hello, %s'), $user_nick) ?> <a href="<?= locale_base_url() . "logout/" ?>"><?= __('Logout') ?></a></div>
            <?php else: ?>
                <div><a href="<?= locale_base_url() . "login/" ?>" class="pure-button btn"><?= __('Login / Register') ?></a></div>
            <?php endif; ?>
        <?php else: ?>
            <div><a href="<?= locale_base_url() . "login/" ?>" class="pure-button btn"><?= __('Login / Register') ?></a></div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
<?php endif;
