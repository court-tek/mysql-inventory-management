<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->increments('id')->unsignedInteger();
          $table->string('f_name', 200)->nullable(false);
          $table->string('l_name', 200)->nullable(false);
          $table->string('address', 100)->nullable(false);
          $table->string('address_2', 100)->nullable();
          $table->string('city', 60)->nullable();
          $table->string('state', 60)->nullable();
          $table->string('country', 3)->nullable(false)->default('USA');
          $table->string('payment_type', 60)->nullable(false)->default('paypal');
          $table->integer('user_id')->nullable(false);
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
