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
    <p><?php esc_html_e( 'Actions', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Background', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'String', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Dashed', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Back', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'All Languages', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'All Projects', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Settings', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Dashboard', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Visibility', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Padding', 'wp-translations-tester' ); ?></p>
    <p><?php esc_html_e( 'Post', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'WebHook testing', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'WebHook trigger', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'Propagation', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'Async task', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'Category', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'Adjust the link behavior', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'Learn how to use the plugin', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'No results found', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'Add it by clicking on the blacklist.', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'Add Keyword', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'Blockquotes', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'Content', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'Content', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'Layout', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'Work', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'Car', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'House', 'wp-translations-tester' ); ?></p>
		<p><?php esc_html_e( 'Job', 'wp-translations-tester' ); ?></p>


  </div>
  <?php
}
