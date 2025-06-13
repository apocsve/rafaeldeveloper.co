<?php namespace Focusfusion\Website\Models;

use Model;

/**
 * Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sluggable;

    protected $jsonable = ['gallery'];

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'focusfusion_website_projects';

    // Define fields to be sluggable
    protected $slugs = ['slug' => 'title'];

    /**
     * @var array rules for validation.
     */
    public $rules = [
        'title' => 'required',
        'slug' => 'unique:your_table'
    ];

}
