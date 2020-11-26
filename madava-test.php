<?php

/**
 * Plugin Name:       Madava test
 * Plugin URI:        https://example.com/
 * Description:       test wordpress plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            San randry
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
/*
Madava test is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Madava test is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Madava test. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

require __DIR__ . '/vendor/autoload.php';

use Inc\base\Activate;
use Inc\base\Deactivate;
use Inc\Init;

defined('ABSPATH') or die('Hey, what are you doing here? human!');

class MadavaTest
{
    function __construct()
    {
        // add_action('init', array($this, 'register_custom_post_type'));
    }
    function register()
    {
        Init::register_services();
    }
    function activate()
    {
        Activate::activate();
    }

    function deactivate()
    {
        Deactivate::deactivate();
    }

    // function register_custom_post_type()
    // {
    //     register_post_type('book', [
    //         'label' => 'Book',
    //         'public' => true,
    //         'menu_position' => 3,
    //         'menu_icon' => 'dashicons-book', // you can wordpress building icon: https://developer.wordpress.org/resource/dashicons/#code-standards
    //         'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    //         'show_in_rest' => true,
    //         'has_archive' => true,
    //     ]);
    // }
}

if (class_exists('MadavaTest')) {
    $madavaTest = new MadavaTest();
    $madavaTest->register();
}

// activation
register_activation_hook(__FILE__, array($madavaTest, 'activate'));

// deactivation
register_deactivation_hook(__FILE__, array($madavaTest, 'deactivate'));

// uninstall
// in the uninstall file
