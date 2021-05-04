<?php
/**
 * Plugin Name: WP-Translations Tester
 * Plugin URI: https://wp-translations.pro
 * Description: Test translations process
 * Author: WP-Translations
 * Author URI: https://wp-translations.pro
 * Version: 1.1.1
 * Text Domain: wp-translations-tester
 * Domain Path: languages
 *
 * @package WPTT
 * @category Core
 * @author Sadler Jerome
 * @version 1.1.1
 */

define( 'WPT_TESTER_SLUG', 'wp-translations-tester' );


require_once( dirname(__FILE__) .'/inc/translations-updater.php' );
require_once( dirname(__FILE__) .'/wp-translations-tester/admin.php' );

function wp_translations_tester_init_t15s() {
    if ( class_exists( 'WP_Translations_Tester_T15S' ) ) {
        $t15s_updater = new WP_Translations_Tester_T15S(
            WPT_TESTER_SLUG,
            'https://packages.translationspress.com/wp-translations/wp-translations-tester/packages.json'
        );
    }
}
add_action( 'init', 'wp_translations_tester_init_t15s' );



/*
 * Search for custom translation file in WP_LANG_DIR/gravityforms
 * if exist override translations from TranslationsPress
 */
function support_custom_translation_file( $mofile, $domain ) {

  if ( 'gravityforms' === $domain ) {
    $locale   = determine_locale(); // WP 5+
    $filename = WP_LANG_DIR . '/gravityforms/gravityforms-' . $locale . '.mo';
    if ( file_exists( $filename ) ) {
      $mofile = $filename;
    }
  }
  return $mofile;
}
add_filter( 'load_textdomain_mofile', 'support_custom_translation_file', 10, 2 );
