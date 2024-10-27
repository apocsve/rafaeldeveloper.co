<?php namespace Focusfusion\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFocusfusionWebsitePosts2 extends Migration
{
    public function up()
    {
        Schema::table('focusfusion_website_posts', function($table)
        {
            $table->string('slug', 255);
        });
    }
    
    public function down()
    {
        Schema::table('focusfusion_website_posts', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
