<?php namespace Pmesolution\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('pmesolution_blog_comments', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('message');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pmesolution_blog_comments');
    }
}
