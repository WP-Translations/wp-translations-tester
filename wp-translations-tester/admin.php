<?php

function wpt_tester_admin_menu() {
	add_plugins_page( 'WPT Tester', 'WPT Tester', 'manage_options', 'wpt-tester-admin-page', 'wpt_tester_admin_page_output' );
}
add_action('admin_menu', 'wpt_tester_admin_menu');

function wpt_tester_admin_page_output() {
  ?>
  <div class="wrap">
		<h2><?php _e( 'Plugin Options', 'wp-translations-tester' ); ?></h2>

    <p><?php esc_html_e( 'Save License', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Delete License', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Activate', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Deactivate', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Install translations', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Post', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Settings', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Dashboard', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Visibility', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Padding', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Margin', 'wp-translations-tester' ); ?></p>

    <p><?php esc_html_e( 'Delete previous version', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Switch to previous version', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Reset this version', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'The resource has been updated', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Delete this estimate', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'GitLab CI rocks',  'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Push Resource!', 'wp-translations-tester' ); ?></p>

    <p><?php esc_html_e( 'Trigger push events', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Second commit', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Third pass', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Test slack notifications', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Better with webhook enable', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Test Slack team notifications', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Test Slack TM notifications', 'wp-translations-tester' ); ?></p>

    <p><?php esc_html_e( 'Testing App notifications', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Testing second textdomain', 'wp-translations-tester-bis' ); ?></p>
  </div>
  <?php
}
