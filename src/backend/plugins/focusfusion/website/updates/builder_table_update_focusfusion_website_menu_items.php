<?php namespace Focusfusion\Website\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFocusfusionWebsiteMenuItems extends Migration
{
    public function up()
    {
        Schema::rename('focusfusion_website_navigation', 'focusfusion_website_menu_items');
    }
    
    public function down()
    {
        Schema::rename('focusfusion_website_menu_items', 'focusfusion_website_navigation');
    }
}
