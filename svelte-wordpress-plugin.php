<?php

/**
 * Plugin Name:  Svelte WordPress Plugin Boilerplate
 * Description:  A boilerplate for developing WordPress plugins with Svelte
 * Version: 0.0.1
 * License: GPL2+
 * Author: Dylan Blokhuis
 * Author URI: https://github.com/dylanblokhuis
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Access denied.' );
}

require_once( __DIR__ . '/includes/SvelteWP.php' );

if ( class_exists( 'SvelteWP' ) ) {
	$svelteWP = new SvelteWP();
}