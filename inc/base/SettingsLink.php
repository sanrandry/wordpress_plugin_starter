<?php

namespace Inc\base;

class SettingsLink extends BaseController
{
    public function register()
    {
        // add settin links
        add_filter("plugin_action_links_" . $this->plugin_basename, array($this, 'settings_link'));
    }
    // handlle admin setting links
    public function settings_link($links)
    {
        $settings_link = '<a href="admin.php?page=madava_test">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
}
