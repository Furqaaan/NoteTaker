<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments("post_id")->unsignedBigInteger();
            $table->unsignedBigInteger("user_id")->default(1);
            $table->foreign("user_id")->references("id")->on("users");
            $table->string("post",1000);
            $table->string("img")->nullable();
            $table->date("date")->default(now());
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
        Schema::dropIfExists('posts');
    }
}
