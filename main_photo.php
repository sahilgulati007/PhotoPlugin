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
		platitude text NOT NULL,
		plongitude text NOT NULL,
		pcreated date NOT NULL,
		pstatus tinytext NOT NULL,
		imagesubmit int NOT NULL,
		eos tinytext NOT NULL,
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
        'photo_list' //function
    );
    //adding submenu to a menu
    add_submenu_page('Photo_Listing',//parent page slug
        'Photo_insert',//page title
        'Photo Insert',//menu titel
        'manage_options',//manage optios
        'Photo_Insert',//slug
        'photo_insert'//function
    );
}

function datatable_enqueue_script() {
    wp_register_script('jquery3','https://code.jquery.com/jquery-3.3.1.js');
    wp_enqueue_script( 'jquery3');
    wp_register_script( 'datatablejs', 'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js' );
    wp_enqueue_script( 'datatablejs');
    wp_register_style('datatablecss','https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css');
    wp_enqueue_style('datatablecss');
    wp_enqueue_style('photocss',plugin_dir_url( __FILE__ ) . 'css/photo.css');
//    wp_register_style('bootstrap_style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
//    wp_enqueue_style('bootstrap_style');
    wp_enqueue_script( 'photojs',plugin_dir_url( __FILE__ ) . 'js/photo.js');
    wp_localize_script( 'photojs', 'ajax_url', admin_url('admin-ajax.php?action=photojs') );
}
add_action('wp_enqueue_scripts', 'datatable_enqueue_script');
//add_action( 'admin_enqueue_scripts','datatable_enqueue_script');

define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'photo_list.php');
require_once (ROOTDIR.'photo_insert.php');

