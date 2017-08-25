<?php namespace Zamora\Sany\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Tecnico Back-end Controller
 */
class Tecnico extends Controller
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

        BackendMenu::setContext('Zamora.Sany', 'sany', 'tecnico');
    }
}
