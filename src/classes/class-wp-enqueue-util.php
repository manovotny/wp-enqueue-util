<?php
/**
 * @package WP_Enqueue_Util
 */

class WP_Enqueue_Util {

    /* Properties
    ---------------------------------------------------------------------------------- */

    /* Instance
    ---------------------------------------------- */

    /**
     * Instance of the class.
     *
     * @var WP_Enqueue_Util
     */
    protected static $instance = null;

    /**
     * Get accessor method for instance property.
     *
     * @return WP_Enqueue_Util Instance of the class.
     */
    public static function get_instance() {

        if ( null == self::$instance ) {

            self::$instance = new self;

        }

        return self::$instance;

    }

    /* Methods
    ---------------------------------------------------------------------------------- */

    /**
     * A convenience function for enqueuing scripts.
     *
     * Will automatically enqueue concat or minified source, depending on debug configuration.
     * Will automatically add localization if name and data are provided.
     *
     * @param WP_Enqueue_Options $options Options to enqueue script with.
     */
    public function enqueue_script( WP_Enqueue_Options $options ) {

        if ( ! $options->have_required_properties() ) {

            trigger_error( 'Trying to enqueue script, but required properties are missing.' );

            return;

        }

        // Required options.
        $handle = $options->get_handle();
        $relative_path = $options->get_relative_path();
        $filename = $options->get_filename();

        // Optional options.
        $filename_debug = $options->get_filename_debug();
        $dependencies = $options->get_dependencies();
        $version = $options->get_version();
        $in_footer = $options->get_in_footer();

        // Localization options.
        $localization_name = $options->get_localization_name();
        $data = $options->get_data();

        $source = $this->get_source_to_enqueue( $relative_path, $filename, $filename_debug );

        wp_register_script(
            $handle,
            $source,
            $dependencies,
            $version,
            $in_footer
        );

        if ( ! empty( $localization_name ) && ! empty( $data ) ) {

            wp_localize_script(
                $handle,
                $localization_name,
                $data
            );

        }

        wp_enqueue_script( $handle );

    }

    /**
     * A convenience function for enqueuing styles.
     *
     * Will automatically enqueue compiled or minified source, depending on debug configuration.
     *
     * @param WP_Enqueue_Options $options Options to enqueue styles with.
     */
    public function enqueue_style( WP_Enqueue_Options $options ) {

        if ( ! $options->have_required_properties() ) {

            trigger_error( 'Trying to enqueue style, but required properties are missing.' );

            return;

        }

        // Required options.
        $handle = $options->get_handle();
        $relative_path = $options->get_relative_path();
        $filename = $options->get_filename();

        // Optional options.
        $filename_debug = $options->get_filename_debug();
        $dependencies = $options->get_dependencies();
        $version = $options->get_version();
        $media = $options->get_media();

        $source = $this->get_source_to_enqueue( $relative_path, $filename, $filename_debug );

        wp_enqueue_style(
            $handle,
            $source,
            $dependencies,
            $version,
            $media
        );

    }

    /**
     * Gets the source to enqueue based upon whether or not debugging is enabled.
     *
     * @param $relative_path string Relative path to the potential files to enqueue.
     * @param $filename string Filename of the production file to enqueue.
     * @param $filename_debug string Filename of the file to enqueue when debugging.
     * @return string A url to the source to enqueue.
     */
    public function get_source_to_enqueue( $relative_path, $filename, $filename_debug = null ) {

        $source_file = $filename;

        if ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG && !empty( $filename_debug ) ) {

            $source_file = $filename_debug;

        }

        $path = realpath( trailingslashit( $relative_path ) . $source_file );

        return WP_Url_Util::get_instance()->convert_absolute_path_to_url( $path );

    }

}
