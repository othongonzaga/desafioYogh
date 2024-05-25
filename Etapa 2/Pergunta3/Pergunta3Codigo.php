<?php
//Aqui está uma versão do código ajustada para se alinhar aos padrões:

/**
 * Plugin Name:     Client Customization
 * Plugin URI:      https://www.yogh.com.br/
 * Description:     Plugins with Project Customization
 * Author:          Yogh Soluções
 * Author URI:      https://www.yogh.com.br/
 * Text Domain:     client-customization
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Client_Customization
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die( 'not allowed' );
}

/**
 * Load plugin text domain for translations.
 */
function client_customization_load_textdomain() {
    load_plugin_textdomain( 'client-customization', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'client_customization_load_textdomain' );

/**
 * Append custom message to the content.
 *
 * @param string $content The original content.
 * @return string The content with the custom message appended.
 */
function client_customization_add_message_to_content( $content ) {
    $message = '<p><b>' . esc_html__( 'This content is created by:', 'client-customization' ) . ' ' . get_bloginfo( 'name' ) . ' (' . get_bloginfo( 'url' ) . ')</b></p>';
    return $content . $message;
}

// Add filter to append message to the content.
add_filter( 'the_content', 'client_customization_add_message_to_content', 10 );
?>
