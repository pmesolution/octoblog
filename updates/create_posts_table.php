<?php namespace Pmesolution\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('pmesolution_blog_posts', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slug');
            $table->text('title');
            $table->text('excerpt');
            $table->text('content');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('pmesolution_blog_posts');
    }
}
