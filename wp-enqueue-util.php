<?php
/**
 * @package WP_Enqueue_Util
 *
 * @wordpress-plugin
 * Plugin Name: WP Enqueue Util
 * Plugin URI: https://github.com/manovotny/wp-enqueue-util
 * Description: A convenient enqueuing utility for WordPress.
 * Version: 1.1.3
 * Author: Michael Novotny
 * Author URI: http://manovotny.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /lang
 * Text Domain: wp-enqueue-util
 * GitHub Plugin URI: https://github.com/manovotny/wp-enqueue-util
 */

/* Composer
---------------------------------------------------------------------------------- */

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {

    require_once __DIR__ . '/vendor/autoload.php';

}

/* Initialization
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/src/initialize.php';