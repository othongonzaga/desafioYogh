<?php
//Aqui está uma versão melhorada do código:

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
 * Append custom message to the content.
 *
 * @param string $content The original content.
 * @return string The content with the custom message appended.
 */
function add_custom_message_to_content( $content ) {
    $message = '<p><b>' . esc_html__( 'This content is created by:', 'client-customization' ) . ' ' . get_bloginfo( 'name' ) . ' (' . get_bloginfo( 'url' ) . ')</b></p>';
    return $content . $message;
}

// Add filter to append message to the content.
add_filter( 'the_content', 'add_custom_message_to_content', 10 );
?>
