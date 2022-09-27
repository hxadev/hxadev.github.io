<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MenuTable extends Migration
{
    protected $connection = 'mongodb';
    public function up()
    {
        Schema::connection("mongodb")->create("menu", function (Blueprint $table) {
            $table->increments("id");
            $table->string("link");
            $table->string("icon");
            $table->string("function");
            $table->timestamps();
        });
        Schema::connection("mongodb")->create("menu_translations", function (Blueprint $table) {
            $table->increments("id");

            $table->integer("menu_id")->unsigned();
            $table->string("locale");

            $table->string("name");

            $table->unique(["menu_id", "locale"]);
            $table->foreign("menu_id")->references("id")->on("menu");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
