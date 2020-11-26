<?php

namespace Inc\pages;

use Inc\base\BaseController;

class Admin extends BaseController
{
    public function register()
    {
        // add admin page
        add_action('admin_menu', array($this, 'add_admin_pages'));
    }
    // admin administration page page
    public function add_admin_pages()
    {
        add_menu_page('Madava test', 'Madava test', 'manage_options', 'madava_test', array($this, 'admin_index'), 'dashicons-store', 110);
    }
    // administration page template
    public function admin_index()
    {
        require_once $this->plugin_dir_path . '/templates/admin.php'; // you can use inline php here
    }
}
