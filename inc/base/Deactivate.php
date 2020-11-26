<?php

namespace Inc\base;

class Deactivate
{
    public static function deactivate()
    {
        // flush rewrite rules
        flush_rewrite_rules();
    }
}
