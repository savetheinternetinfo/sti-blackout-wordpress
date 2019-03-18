<?php 
/*
	Plugin Name: SaveTheInternet Blackout
	Version: 1.0
	Plugin URI: https://savetheinternet.info
	Description: This Plugin will show a blackout page for SaveTheInternet when enabled. 
	Author: SaveTheInternet - NullDev
	Author URI: https://github.com/savetheinternetinfo
*/
	if (!defined('WPINC')) die;

	if (!function_exists('wp_redirect')) require(ABSPATH . WPINC . '/pluggable.php');
	
	if (!is_admin()){
		  wp_redirect(plugins_url('sti-blackout/blackout.php'), 302);
		  exit();
	}
?>
