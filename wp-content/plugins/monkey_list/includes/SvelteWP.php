<?php

class SvelteWP
{
	public function __construct()
	{
		add_action('wp_enqueue_scripts', array($this, 'ml_dependencies'));
	}

	public function ml_dependencies()
	{
		wp_enqueue_script('ml', plugins_url('dist/main.js', dirname(__FILE__)), array(), time(), true);
		wp_enqueue_style('ml', plugins_url('assets/main.css', dirname(__FILE__)), array(), time());

		wp_localize_script('ml', 'wordpress_object', array(
			'plugins_url' => plugins_url('/', dirname(__FILE__)),
			'ajax_url' => admin_url('admin-ajax.php'),
		));
	}
}
