<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToProductsAndOrdersOnDetailOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_order', function (Blueprint $table) {
            $table->foreign('IDOrder')->references('id')->on('orders');
            $table->foreign('IDProduk')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_order', function (Blueprint $table) {
            $table->dropForeign('orders_IDOrder_foreign');
            $table->dropForeign('products_IDProduk_foreign');
        });
    }
}
