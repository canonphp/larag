<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cate_id')->comment('分类ID')->index();
            $table->unsignedInteger('author_id')->comment('作者ID')->index();
            $table->unsignedInteger('comment_id')->comment('评论ID');
            $table->string('title',50)->comment('文章标题');
            $table->string('image',200)->comment('文章图片');
            $table->tinyInteger('is_top')->comment('文章是否置顶，1是0否');
            $table->integer('browse_num')->comment('浏览量');
            $table->tinyInteger('state')->comment('文章状态')->index();
            $table->text('content')->comment('文章内容');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
