<?php namespace Focusfusion\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFocusfusionWebsitePosts3 extends Migration
{
    public function up()
    {
        Schema::table('focusfusion_website_posts', function($table)
        {
            $table->string('reel_image', 255)->nullable();
            $table->string('hero_image', 255)->nullable();
            $table->string('square_image', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('focusfusion_website_posts', function($table)
        {
            $table->dropColumn('reel_image');
            $table->dropColumn('hero_image');
            $table->dropColumn('square_image');
        });
    }
}
