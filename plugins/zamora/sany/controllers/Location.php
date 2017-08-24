<?php namespace Zamora\Sany\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Location Back-end Controller
 */
class Location extends Controller
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

        BackendMenu::setContext('Zamora.Sany', 'sany', 'location');
    }
}
