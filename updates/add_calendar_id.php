<?php namespace Sitesforchurch\Ministries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddCalendarId extends Migration
{

    public function up()
    {
        Schema::table('radiantweb_proevents_calendars', function($table)
        {
            $table->integer('ministry_id')->unsigned()->nullable();
        });
    }

    public function down()
    {
        Schema::table('radiantweb_proevents_calendars', function($table)
        {
            $table->dropColumn('ministry_id');
        });
    }
}