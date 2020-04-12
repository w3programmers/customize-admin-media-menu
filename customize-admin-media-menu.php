<?php
 /*
 Plugin Name: Customize Admin Media Menu
 Plugin URI: https://github.com/w3programmers/customize-admin-media-menu
 Description: Customize Admin Media Menu
 Version: 1.0
 Author: Masud Alam
 Author URI: http://w3programmers.com/bangla
 License: GPLv2
 */

add_action( 'admin_menu', 'change_media_label' );
function change_media_label(){
  global $menu, $submenu;
  $menu[10][0] = 'Photos/Videos';
  $submenu['upload.php'][5][0] = 'All Photos/Videos';
  $submenu['upload.php'][10][0] = 'Upload new';
}