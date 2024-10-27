<?php namespace Focusfusion\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFocusfusionWebsiteProjects extends Migration
{
    public function up()
    {
        Schema::create('focusfusion_website_projects', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('slug', 255);
            $table->string('title', 255);
            $table->text('description');
            $table->string('type')->nullable();
            $table->string('client_name')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('dev_time')->nullable();
            $table->string('dev_tags')->nullable();
            $table->string('featured_image');
            $table->text('gallery')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('focusfusion_website_projects');
    }
}
