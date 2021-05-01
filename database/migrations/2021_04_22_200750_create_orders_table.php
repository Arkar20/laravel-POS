<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignid('user_id');
            $table->foreignid('customer_id');
            $table->text('cart');
            $table
                ->foreignId('delivery_id')
                ->nullable()
                ->default(null);
            $table->bigInteger('total_cost');
            $table->boolean('status')->default(true);
            $table->date('order_date')->default(now());
            $table->timestamps();

            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table
                ->foreign('customer_id')
                ->references('id')
                ->on('customers')
                ->onDelete('cascade');
            $table
                ->foreign('delivery_id')
                ->references('id')
                ->on('deliveries')
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
        Schema::dropIfExists('orders');
    }
}
