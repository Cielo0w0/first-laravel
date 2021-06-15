<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // $table->資料型態('欄位名稱');
            // ->comment('可以寫註解')
            // ->default('預設值')
            // ->nullable('可以不打')=可以留空
            $table->string('name')->comment('產品名稱');
            $table->integer('price')->comment('價格');
            $table->float('discount')->comment('折扣');
            $table->text('discript')->comment('產品描述')->nullable();
            // 圖片用longText存
            $table->longText('img')->comment('產品圖片');
            // laravel本身就有的，自動記錄創建時間以及更新時間
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
        Schema::dropIfExists('products');
    }
}
