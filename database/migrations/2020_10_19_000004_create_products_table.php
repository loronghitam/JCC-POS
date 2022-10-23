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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->unsignedBigInteger('id_category') ->nullable();
            $table->foreignId('id_category')->constrained('categories');
            $table->text('detail');
            $table->decimal('price', 15, 2);
            $table->string('image');
            $table->timestamps();

            // $table  ->foreign('id_category')
            //         ->references('id')
            //         ->on('categories')
            //         ->constrained()
            //         ->onDelete('cascade');

            // $table  ->foreignId('id_category')
            //         ->constrained('categories')
            //         ->onDelete('cascade');
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
};
