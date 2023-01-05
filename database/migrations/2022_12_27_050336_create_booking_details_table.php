<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            // $table->id('booking_id');
            // $table->id('product_id');
            $table->foreignId('booking_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->primary(['booking_id','product_id']);
            $table->date('rent_time');
            $table->date('rent_date');
            $table->date('rent_return');
            $table->smallInteger('quantity');
            $table->smallInteger('price');
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
        Schema::dropIfExists('booking_details');
    }
}
