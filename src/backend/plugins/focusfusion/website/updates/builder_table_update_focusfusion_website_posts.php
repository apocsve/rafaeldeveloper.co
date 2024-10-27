<?php namespace Focusfusion\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFocusfusionWebsitePosts extends Migration
{
    public function up()
    {
        Schema::rename('focusfusion_website_blog', 'focusfusion_website_posts');
    }
    
    public function down()
    {
        Schema::rename('focusfusion_website_posts', 'focusfusion_website_blog');
    }
}