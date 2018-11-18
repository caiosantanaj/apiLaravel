<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->text("news");
            $table->text("resume");
            $table->string("img_url")->nullable();
            $table->foreign("user_id")->references('id')->on('users')->onDelete('cascade');
            $table->integer("user_id")->unsigned()->index();
            $table->integer("category_id")->default(null);
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
        Schema::dropIfExists('news');
    }
}
