<?php
defined( 'ABSPATH' ) or die( 'Cheatin&#8217; uh?' );
/**
 * Plugin Name: Auto Update Plugins by Platform Pro
 * Description: Created to auto update Beaver Builder (and other plugins)
 * Author:      Platform Pro
 * Author URI:  https://platformpro.nl
 */

add_filter( 'auto_update_plugin', '__return_true' ); // Enable plugin updates
add_filter( 'auto_update_theme', '__return_true' ); // Enable theme updates
add_filter( 'allow_minor_auto_core_updates', '__return_true' );  // Enable WP core minor updates
add_filter( 'allow_major_auto_core_updates', '__return_true' ); // Enable WP core major updates
add_filter( 'auto_core_update_send_email', '__return_false' ); // Disable email notifications of core updates
