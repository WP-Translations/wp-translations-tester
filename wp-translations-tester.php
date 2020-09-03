<?php
/**
 * Plugin Name: WP-Translations Tester
 * Plugin URI: https://wp-translations.pro
 * Description: Test translations process
 * Author: WP-Translations
 * Author URI: https://wp-translations.pro
 * Version: 1.0.0
 * Text Domain: wp-translations-tester
 * Domain Path: languages
 *
 * @package WPTT
 * @category Core
 * @author Sadler Jerome
 * @version 1.0.0
 */

require_once( dirname(__FILE__) .'/inc/translations-updater.php' );
require_once( dirname(__FILE__) .'/wp-translations-tester/admin.php' );

function wp_translations_tester_init_t15s() {
    if ( class_exists( 'WP_Translations_Tester_T15S' ) ) {
        $t15s_updater = new WP_Translations_Tester_T15S(
            'wp-translations-tester',
            'https://packages.translationspress.com/wp-translations/wp-translations-tester/packages.json'
        );
    }
}
add_action( 'init', 'wp_translations_tester_init_t15s' );
