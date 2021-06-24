<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_config', function (Blueprint $table) {
            $table->id();
            $table->integer('pid')->default(0)->comment('父id');
            $table->string('title',255)->comment('配置分类名称');
            $table->string('en_title',255)->comment('配置分类英文名称');
            $table->tinyInteger('status')->unsigned()->default(1)->comment('配置状态');
            $table->tinyInteger('info')->unsigned()->default(0)->comment('是否显示');
            $table->string('icon',30)->nullable()->comment('图标');
            $table->integer('type')->default(0)->comment('配置类型');
            $table->integer('sort')->default(0)->comment('排序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('system_config');
    }
}
