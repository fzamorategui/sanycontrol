<?php namespace Zamora\Sany;

use Backend;
use System\Classes\PluginBase;

/**
 * Sany Plugin Information File
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
            'name'        => 'Sany',
            'description' => 'No description provided yet...',
            'author'      => 'Zamora',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

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
            'Zamora\Sany\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'zamora.sany.some_permission' => [
                'tab' => 'Sany',
                'label' => 'Some permission'
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
            'sany' => [
                'label'       => 'Clientes',
                'url'         => Backend::url('zamora/sany/client'),
                'icon'        => 'icon-user',
                'permissions' => ['zamora.sany.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'sepomex' => [
                'label'       => 'Base SEPOMEX',
                'description' => 'Administra y carga base de SEPOMEX',
                'category'    => 'SEPOMEX',
                'icon'        => 'icon-globe',
                'url'         => Backend::url('zamora/sany/sepomex'),
                'order'       => 500,
            ]
        ];
    }
}
