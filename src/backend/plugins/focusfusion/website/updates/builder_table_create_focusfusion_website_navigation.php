<?php namespace Focusfusion\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFocusfusionWebsiteNavigation extends Migration
{
    public function up()
    {
        Schema::create('focusfusion_website_navigation', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('label');
            $table->text('path');
            $table->text('target')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('focusfusion_website_navigation');
    }
}
