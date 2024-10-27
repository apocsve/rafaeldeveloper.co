<?php namespace Focusfusion\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFocusfusionWebsiteBlog extends Migration
{
    public function up()
    {
        Schema::create('focusfusion_website_blog', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title', 255);
            $table->text('excerpt')->nullable();
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('focusfusion_website_blog');
    }
}
