<?php namespace Focusfusion\Website\Models;

use Model;

/**
 * Model
 */
class MenuItem extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'focusfusion_website_menu_items';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
