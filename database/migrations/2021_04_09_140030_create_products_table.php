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
            $table->string('name', 50);
            $table->foreignId('color_id');
            $table->foreignId('category_id');
            $table->foreignId('size_id');
            $table->text('desc');
            $table->string('total_qty', 40);
            $table->string('price', 40);

            $table->timestamps();

            $table
                ->foreign('color_id')
                ->references('id')
                ->on('colors')
                ->onDelete('cascade');
            $table
                ->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table
                ->foreign('size_id')
                ->references('id')
                ->on('sizes')
                ->onDelete('cascade');
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
