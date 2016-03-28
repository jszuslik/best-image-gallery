<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://norulesweb.com
 * @since      1.0.0
 *
 * @package    Best_Image_Gallery
 * @subpackage Best_Image_Gallery/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Best_Image_Gallery
 * @subpackage Best_Image_Gallery/includes
 * @author     Joshua Szuslik <joshuaszuslik@gmail.com>
 */
class Best_Image_Gallery_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'best-image-gallery',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
