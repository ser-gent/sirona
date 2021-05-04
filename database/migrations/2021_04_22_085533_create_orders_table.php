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

            $table->dateTime('departure_time')->nullable();
            $table->dateTime('arrival_time');
            $table->integer('quantity');
            $table->integer('status');

            $table->foreignId('robot_id')->nullable()->constrained('robots');
            $table->foreignId('receiver')->constrained('users');
            $table->foreignId('departure')->constrained('delivery_points');
            $table->foreignId('arrival')->constrained('delivery_points');
            $table->foreignId('product')->constrained('products');
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
        Schema::dropIfExists('orders');
    }
}
