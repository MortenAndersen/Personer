<?php
/*
Plugin Name: Webspeed person
Version: 1.1
Plugin URI: https://www.web.dk
Description: Personer. Requirements: Advanced Custom Fields PRO
Author: Morten Andersen
Text Domain: websepeed-personer-domain
Author URI: https://www.web.dk
 */

// Files
if (class_exists('ACF')) {
	require_once 'files/acf.php';
	require_once 'files/type.php';
	require_once 'files/functions.php';
	require_once 'files/posttype.php';
	require_once 'files/shortcode.php';
}
