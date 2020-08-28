<?php

function wpt_tester_admin_menu_plugin1() {
	add_plugins_page( 'WPT Tester Plugin 1', 'WPT Tester Plugin 1', 'manage_options', 'wpt-tester-admin-page-plugin1', 'wpt_tester_admin_page_plugin1_output' );
}
add_action('admin_menu', 'wpt_tester_admin_menu');

function wpt_tester_admin_page_plugin1_output() {
  ?>
  <div class="wrap">
		<h2><?php _e( 'Plugin 1 Options', 'wp-translations-tester-bis' ); ?></h2>

	  <p><?php esc_html_e( 'Second commit on GitHub', 'wp-translations-tester-bis' ); ?></p>
    <p><?php esc_html_e( 'Testing second textdomain', 'wp-translations-tester-bis' ); ?></p>
    <p><?php esc_html_e( 'New string', 'wp-translations-tester-bis' ); ?></p>
    <p><?php esc_html_e( 'Ok for mono repo!', 'wp-translations-tester-bis' ); ?></p>
  </div>
  <?php
}
