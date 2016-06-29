<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.hbcompass.net/
 * @since      1.0.0
 *
 * @package    Project_Facet_Web_Posts
 * @subpackage Project_Facet_Web_Posts/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Project_Facet_Web_Posts
 * @subpackage Project_Facet_Web_Posts/includes
 * @author     Heather Bryant <heather@rebelcompass.com>
 */
class Project_Facet_Web_Posts_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'project-facet-web-posts',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
