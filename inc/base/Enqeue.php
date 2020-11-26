<?php

namespace Inc\base;

use Inc\base\BaseController;

class Enqeue extends BaseController
{
    public function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue_script'));
    }

    public function enqueue_script()
    {
        // die($this->plugin_dir_url . '/assets/style.css');
        // enqueue all our scripts
        wp_enqueue_style('madava_test_style', $this->plugin_dir_url . 'assets/style.css');
        wp_enqueue_script('madava_test_script', $this->plugin_dir_url . 'assets/index.js');
    }
}
