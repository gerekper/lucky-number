<?php namespace Gerekper\Numbers;

/**
 * The plugin.php file (called the plugin initialization script) defines the plugin information class.
 */

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Numbers AI',
            'description' => 'Provides features used by the provided demonstration theme.',
            'author'      => 'Richard Irwan Shah',
            'icon'        => 'icon-btc'
        ];
    }

    public function registerComponents()
    {
        return [
            '\October\Demo\Components\Todo' => 'demoTodo'
        ];
    }
}
