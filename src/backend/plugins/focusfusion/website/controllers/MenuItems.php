<?php namespace Focusfusion\Website\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class MenuItems extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'website_manipulate_menu_item' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Focusfusion.Website', 'website_menu_items');
    }

}
