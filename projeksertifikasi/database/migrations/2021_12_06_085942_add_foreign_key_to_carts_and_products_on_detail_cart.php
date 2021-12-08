<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToCartsAndProductsOnDetailCart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_cart', function (Blueprint $table) {
            $table->foreign('IDCart')->references('id')->on('carts');
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
        Schema::table('detail_cart', function (Blueprint $table) {
            $table->dropForeign('carts_IDCart_foreign');
            $table->dropForeign('products_IDProduk_foreign');
        });
    }
}
