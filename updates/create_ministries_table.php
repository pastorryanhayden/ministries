<?php namespace Sitesforchurch\Ministries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateMinistriesTable extends Migration
{

    public function up()
    {
        Schema::create('sitesforchurch_ministries_ministries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('group')->nullable();
            $table->string('leaderName')->nullable();
            $table->string('leaderPicture')->nullable();
            $table->string('leaderPhone')->nullable();
            $table->string('leaderEmail')->nullable();
            $table->text('leaderDescription')->nullable();
            $table->string('meetingTime')->nullable();
            $table->string('meetingPlace')->nullable();
            $table->text('shortDescription')->nullable();
            $table->text('longDescription')->nullable();
            $table->string('ministryLogo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sitesforchurch_ministries_ministries');
    }

}
