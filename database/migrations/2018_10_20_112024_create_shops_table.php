<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
//            商品名称,商品分类ID,价格,商品详情,是否上架,商品浏览次数,创建时间,更新时间]的增删改查
            $table->string('name');
            $table->integer('lei_id');
            $table->decimal('price');
            $table->text('details');
            $table->integer('shelf');
            $table->integer('num');
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
        Schema::dropIfExists('shops');
    }
}
