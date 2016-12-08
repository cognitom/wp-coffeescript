<?php
/*
Plugin Name: WP Riot Tag
Plugin URI: http://wordpress.org/extend/plugins/wp-riottag/
Description: Allows developers to easily use Riot Tag in WordPress. Simply use enqueue_riottag(); the compilation is done automatically behind the scenes.
Author: Tom Benner
Version: 1.0
Author URI:
*/

require_once dirname(__FILE__).'/functions.php';
require_once dirname(__FILE__).'/lib/wp_riottag.php';

global $wprt;
$wprt = new WpRiottag();

register_deactivation_hook(__FILE__, array($wprt, 'deactivate'));

?>
