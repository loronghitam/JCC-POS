<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->decimal('total_price', 15, 2);
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_product');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('RESTRICT')->onUpdate('RESTRICT');

            $table->foreign('id_product')->references('id')->on('products')->onDelete('RESTRICT')->onUpdate('RESTRICT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};