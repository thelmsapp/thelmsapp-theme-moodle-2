<?php

defined('MOODLE_INTERNAL') || die();

function xmldb_theme_thelmsapp_upgrade($oldversion) {

    // Moodle v2.2.0 release upgrade line
    // Put any upgrade step following this

    if ($oldversion < 2012051503) {
        $currentsetting = get_config('theme_thelmsapp');

        if (isset($currentsetting->displaylogo)) { // useless but safer
            // Create a new config setting called headercontent and give it the current displaylogo value.
            set_config('headercontent', $currentsetting->displaylogo, 'theme_thelmsapp');
            unset_config('displaylogo', 'theme_thelmsapp');
        }

        if (isset($currentsetting->logo)) { // useless but safer
            // Create a new config setting called headercontent and give it the current displaylogo value.
            set_config('customlogourl', $currentsetting->logo, 'theme_thelmsapp');
            unset_config('logo', 'theme_thelmsapp');
        }

        if (isset($currentsetting->frontpagelogo)) { // useless but safer
            // Create a new config setting called headercontent and give it the current displaylogo value.
            set_config('frontpagelogourl', $currentsetting->frontpagelogo, 'theme_thelmsapp');
            unset_config('frontpagelogo', 'theme_thelmsapp');
        }

        upgrade_plugin_savepoint(true, 2012051503, 'theme', 'thelmsapp');
    }

    // Moodle v2.3.0 release upgrade line
    // Put any upgrade step following this


    // Moodle v2.4.0 release upgrade line
    // Put any upgrade step following this


    return true;
}