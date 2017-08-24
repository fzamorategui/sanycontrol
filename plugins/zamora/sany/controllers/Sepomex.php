<?php namespace Zamora\Sany\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use System\Classes\SettingsManager;

/**
 * Sepomex Back-end Controller
 */
class Sepomex extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Zamora.Sany', 'sany', 'sepomex');
        SettingsManager::setContext('Zamora.Sany', 'settings');
    }
}
