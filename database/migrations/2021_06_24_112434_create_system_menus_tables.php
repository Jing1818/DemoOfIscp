<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemMenusTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_menus', function (Blueprint $table) {
            $table->id();
            $table->integer('pid')->default(0)->unsigned();
            $table->string('icon',16);
            $table->string('menu_name');
            $table->string('module',32);
            $table->string('controller',64);
            $table->string('action',32);
            $table->string('api_url',100);
            $table->string('methods',10);
            $table->string('params',128)->default('[]');
            $table->tinyInteger('is_show')->default(1);
            $table->tinyInteger('access')->default(1);
            $table->string('menu_path',128);
            $table->tinyInteger('auth_type')->default(1);
            $table->tinyInteger('is_header')->default(0);
            $table->tinyInteger('is_del')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('system_menus');
    }
}
