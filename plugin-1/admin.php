<?php

function wpt_tester_admin_menu_plugin1() {
	add_plugins_page( 'WPT Tester Plugin 1', 'WPT Tester Plugin 1', 'manage_options', 'wpt-tester-admin-page-plugin1', 'wpt_tester_admin_page_plugin1_output' );
}
add_action('admin_menu', 'wpt_tester_admin_menu');

function wpt_tester_admin_page_plugin1_output() {
  ?>
  <div class="wrap">
		<h2><?php _e( 'Plugin 1 Options', 'wp-translations-tester-bis' ); ?></h2>

	  <p><?php esc_html_e( 'Save License', 'wp-translations-tester-bis' ); ?></p>
    <p><?php esc_html_e( 'Delete License', 'wp-translations-tester-bis' ); ?></p>
    <p><?php esc_html_e( 'Activate', 'wp-translations-tester-bis' ); ?></p>
    <p><?php esc_html_e( 'Deactivate', 'wp-translations-tester-bis' ); ?></p>
	  <p><?php esc_html_e( 'Margin', 'wp-translations-tester-bis' ); ?></p>
	  <p><?php esc_html_e( 'Padding', 'wp-translations-tester-bis' ); ?></p>
  </div>
  <?php
}
