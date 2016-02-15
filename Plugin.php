<?php namespace Sitesforchurch\Ministries;

use Backend;
use System\Classes\PluginBase;

/**
 * ministries Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Ministries',
            'description' => 'Ministry Page Organizer',
            'author'      => 'sitesforchurch',
            'icon'        => 'icon-users'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Sitesforchurch\Ministries\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'sitesforchurch.ministries.ministries' => [
                'tab' => 'ministries',
                'label' => 'Manage Ministries'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'ministries' => [
                'label'       => 'Ministries',
                'url'         => Backend::url('sitesforchurch/ministries/ministries'),
                'icon'        => 'icon-users',
                'permissions' => ['sitesforchurch.ministries.ministries'],
                'order'       => 502,
            ],
        ];
    }

}
