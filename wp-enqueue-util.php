<?php
/**
 * PROJECT_DESCRIPTION
 *
 * @package WP_Enqueue_Util
 * @author Michael Novotny <manovotny@gmail.com>
 * @license GPL-3.0+
 * @link https://github.com/manovotny/wp-enqueue-util
 * @copyright 2014 Michael Novotny
 *
 * @wordpress-plugin
 * Plugin Name: WP Enqueue Util
 * Plugin URI: https://github.com/manovotny/wp-enqueue-util
 * Description: PROJECT_DESCRIPTION
 * Version: 0.0.0
 * Author: Michael Novotny
 * Author URI: http://manovotny.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /lang
 * Text Domain: wp-enqueue-util
 * GitHub Plugin URI: https://github.com/manovotny/wp-enqueue-util
 */

/* Access
---------------------------------------------------------------------------------- */

if ( ! defined( 'WPINC' ) ) {

    die;

}

/* Support
---------------------------------------------------------------------------------- */

wp_enqueue_script( 'TODO' );

/* Libraries
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/lib/';

/* Classes
---------------------------------------------------------------------------------- */

if ( ! class_exists( 'TODO' ) ) {

    require_once __DIR__ . '/classes/';

}

/* Widgets
---------------------------------------------------------------------------------- */

if ( ! class_exists( 'TODO' ) ) {

    require_once __DIR__ . '/classes/widgets/';

    add_action( 'widgets_init', create_function( '', 'register_widget("TODO");' ) );

}

/* Admin
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/admin/inc/';

/* Includes
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/inc/';
