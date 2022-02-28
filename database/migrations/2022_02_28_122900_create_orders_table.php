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
            $table->foreignId('user_id')->constrained();
            $table->text('booking_id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile_number');
            $table->text('pickup_location')->nullable();
            $table->string('order_date');
            $table->string('tour_name');
            $table->string('adult_count')->default(0);
            $table->string('child_count')->default(0);
            $table->string('total');
            $table->enum('status', ['processing', 'completed'])->default('processing');
            $table->string('payment_method');
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
