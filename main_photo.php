<?php

/*
  Plugin Name: Main Photo
  Description: Plugin for main page
  Version: 1
  Author: Sahil gulati
  Author URI: http://sahilgulati.com
 */

global $jal_db_version;
$jal_db_version = '1.0';

function jal_install() {
    global $wpdb;
    global $jal_db_version;

    $table_name = $wpdb->prefix . 'photo_list';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
		rid mediumint(9) NOT NULL AUTO_INCREMENT,
		ptype tinytext NOT NULL,
	    ptitle text NOT NULL,
	    pdesc text NULL,
		pcategory text NOT NULL,
		pcreated date NOT NULL,
		pstatus tinytext NOT NULL,
		imagesubmit int NOT NULL, 
		PRIMARY KEY  (rid)
	) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );

    add_option( 'jal_db_version', $jal_db_version );
}
register_activation_hook( __FILE__, 'jal_install' );
//adding in menu
add_action('admin_menu', 'at_try_menu');

function at_try_menu() {
    //adding plugin in menu
    add_menu_page('photo_list', //page title
        'Photo Listing', //menu title
        'manage_options', //capabilities
        'Photo_Listing', //menu slug
        photo_list //function
    );
    //adding submenu to a menu
    add_submenu_page('Photo_Listing',//parent page slug
        'Photo_insert',//page title
        'Photo Insert',//menu titel
        'manage_options',//manage optios
        'Photo_Insert',//slug
        'employee_insert'//function
    );
    add_submenu_page( null,//parent page slug
        'employee_update',//$page_title
        'Employee Update',// $menu_title
        'manage_options',// $capability
        'Employee_Update',// $menu_slug,
        'employee_update'// $function
    );
    add_submenu_page( null,//parent page slug
        'employee_delete',//$page_title
        'Employee Delete',// $menu_title
        'manage_options',// $capability
        'Employee_Delete',// $menu_slug,
        'employee_delete'// $function
    );
}

define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'photo_list.php');
require_once (ROOTDIR.'photo_insert.php');
require_once (ROOTDIR.'employee_update.php');
require_once (ROOTDIR.'employee_delete.php');
