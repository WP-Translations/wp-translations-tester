<?php

function wpt_tester_admin_menu() {
	add_plugins_page( 'WPT Tester', 'WPT Tester', 'manage_options', 'wpt-tester-admin-page', 'wpt_tester_admin_page_output' );
}
add_action('admin_menu', 'wpt_tester_admin_menu');

function wpt_tester_admin_page_output() {
  ?>
  <div class="wrap">
		<h2><?php _e( 'Plugin Options', 'wp-translations-tester' ); ?></h2>

  


  </div>
  <?php
}
