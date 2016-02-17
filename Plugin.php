<?php namespace Sitesforchurch\Ministries;

use Backend;
use System\Classes\PluginBase;
use Radiantweb\Proevents\Models\Calendar;
use Sitesforchurch\Ministries\Models\Ministry;

/**
 * ministries Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['Radiantweb.Proevents'];
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
        return [
            'Sitesforchurch\Ministries\Components\Ministry' => 'Ministry',
            'Sitesforchurch\Ministries\Components\Ministries' => 'Ministries',
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
                'sideMenu' => [
                    'typeofworks' => [
                        'label'       => 'Ministries',
                        'icon'        => 'icon-users',
                        'url'         => Backend::url('sitesforchurch/ministries/ministries'),
                    ]
                ]
            ],
        ];
    }

    public function boot() {
        Calendar::extend(function($model) {
            $model->belongsTo['ministry'] = ['Sitesforchurch\Ministries\Models\Ministry'];
        });
    }
}
