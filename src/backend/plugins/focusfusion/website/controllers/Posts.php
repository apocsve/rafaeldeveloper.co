<?php namespace Focusfusion\Website\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Posts extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'websote_blog_manipulate_post' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Focusfusion.Website', 'blog');
    }

}
