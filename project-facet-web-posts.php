<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.hbcompass.net/
 * @since             1.0.0
 * @package           Project_Facet_Web_Posts
 *
 * @wordpress-plugin
 * Plugin Name:       Project Facet Web Posts
 * Plugin URI:        projectfacet.com
 * Description:       This plugin pulls in web posts from Project Facet platform and generates draft posts.
 * Version:           1.0.0
 * Author:            Heather Bryant
 * Author URI:        http://www.hbcompass.net/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       project-facet-web-posts
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-project-facet-web-posts-activator.php
 */
function activate_project_facet_web_posts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-project-facet-web-posts-activator.php';
	Project_Facet_Web_Posts_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-project-facet-web-posts-deactivator.php
 */
function deactivate_project_facet_web_posts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-project-facet-web-posts-deactivator.php';
	Project_Facet_Web_Posts_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_project_facet_web_posts' );
register_deactivation_hook( __FILE__, 'deactivate_project_facet_web_posts' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-project-facet-web-posts.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_project_facet_web_posts() {

	$plugin = new Project_Facet_Web_Posts();
	$plugin->run();

}
run_project_facet_web_posts();
