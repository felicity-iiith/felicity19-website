<?php
if (empty($is_ajax)):
?>
              </div>
            </div>
        </div>
    </div>
</section>
<button id="toggle" onclick="location.assign('/')" class="toggle i" style="display: block; left: 90%; top: 17%; z-index: 4;">
    <div class="cross">
        <div class="x"></div>
        <div class="y"></div>
    </div>
</button>

<div id="menu">
  <h2>Menu</h2>
  <ul class="links" style="list-style: none;padding-left: 0px;">
      <li><a onclick="openPage('about')">About US</a></li>
      <li><a onclick="openPage('events')">Events</a></li>
      <li><a onclick="openPage('team')">Team</a></li>
      <li><a onclick="openPage('sponsors')">Sponsors</a></li>
      <li><a onclick="openPage('contact')">Contact Us</a></li>
  </ul>
</div>
<!-- Scripts -->
<script type="text/javascript">
  var slideout = new Slideout({
        'panel': document.getElementById('panelcontainer'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70
      });

      // Toggle button
      document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
      });
      document.querySelector('#panelcontainer').addEventListener('click', function() {
        slideout.close();
      });
</script>
<script src="<?= base_url() ?>static/scripts/common.js" charset="utf-8"></script>
<script src="<?= base_url() ?>static/scripts/ajaxify.js" charset="utf-8"></script>
<script src="<?= base_url() ?>static/scripts/navigation.js" charset="utf-8"></script>

<style>
      .slideout-menu {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        z-index: 0;
        width: 256px;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        display: none;
        background-color: grey;
        background-image: linear-gradient(145deg, #1D1F20, #404348);
      }

      .slideout-open,
      .slideout-open body,
      .slideout-open .slideout-panel {
      }

      .slideout-open .slideout-menu {
        display: block;
      }
    </style>

<?php $this->load_fragment('google_analytics'); ?>
    </body>
    <script>
        $('.content-center').css('display', 'none');
    </script>
</html>
<?php endif;
