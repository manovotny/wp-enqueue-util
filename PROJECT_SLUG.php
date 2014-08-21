<?php
/**
 * PROJECT_DESCRIPTION
 *
 * @package PROJECT_PACKAGE
 * @author AUTHOR_NAME <AUTHOR_EMAIL>
 * @license GPL-3.0+
 * @link http://project-url.com
 * @copyright PROJECT_COPYRIGHT
 *
 * @wordpress-plugin
 * Plugin Name: PROJECT_NAME
 * Plugin URI: http://project-url.com
 * Description: PROJECT_DESCRIPTION
 * Version: 0.0.0
 * Author: AUTHOR_NAME
 * Author URI: AUTHOR_URL
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /TRANSLATIONS_PATH
 * Text Domain: TRANSLATIONS_DOMAIN
 * GitHub Plugin URI: http://project-url.com
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
