<?php
/*
 * Plugin Name:       Admin Ads
 * Plugin URI:        http://jkshoppie.com
 * Description:       Simple plugin to show ads in admin dashboard. Useful for multi/guest author sites.
 * Version:           1.0.0
 * Author:            Joel James
 * Author URI:        http://www.joelsays.com/about-me/
 * Text Domain:       admin-ads
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @since             1.0.0
 * @package           AADS
 */
 
 /* 
	Admin Ads - WordPress Plugin
	Copyright (C) 2014-2015, Joel James, me@joelsays.com

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * Check if the file is called directly.
 * 
 * If file is called directly, exit with
 * a message to user.
 */
 
if ( ! defined( 'WPINC' ) ) {
	die('Nice try dude. But I am sorry');
}
/**
 * Include plugin main class.
 * 
 * including the main class file
 * of the plugin with all functions.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-admin-ads.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * we are calling the main plugin class to start the plugin
 * execution.
 *
 * @since		1.0.0
 * @author		Joel James
 * @created		04/02/2015
 */
function run_admin_ads() {

	$spmm = new Admin_Ads();
	$spmm->run();

}
/**
 * Run the plugin.
 */
run_admin_ads();

/******* Plugin is writter and managed by Joel James ******/
