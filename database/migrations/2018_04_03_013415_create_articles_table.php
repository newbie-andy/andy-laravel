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
            $table->increments('id')->comment('文章的id');
            $table->integer('user_id')->comment('发布人id');
            $table->integer('type_id')->comment('文章的类型id');
            $table->string('title')->comment('文章标题');
            $table->mediumText('summery')->comment('文章的简介');
            $table->string('images')->comment('文章的头图');
            $table->longText('content')->comment('文章的内容');
            $table->tinyInteger('category_id')->comment('文章分类id');
            $table->string('tags')->comment('文章的标签（字符串存储）');
            $table->tinyInteger('is_reprint')->default(0)->comment('是否转载');
            $table->string('reprint_url')->comment('转载的URL');
            $table->string('reprint_summmery')->comment('转载说明');
            $table->tinyInteger('is_public')->default(0)->comment('是否公开');
            $table->integer('views')->default(0)->comment('浏览量');
            $table->integer('likes')->default(0)->comment('喜欢');
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
