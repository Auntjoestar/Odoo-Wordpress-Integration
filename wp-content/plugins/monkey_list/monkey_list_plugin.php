<?php

/**
* Plugin Name: Monkey List
* Description: A monkey list to try integrate svelte with wordpress
* */

if (! defined('ABSPATH')) {
    die('Access denied.');
}

require_once(__DIR__ . '/includes/SvelteWP.php');

if (class_exists('SvelteWP')) {
    $svelteWP = new SvelteWP();
}
