<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
          $table->increments('id')->unsignedInteger();
          $table->string('title', 200)->nullable(false);
          $table->string('sku', 60)->nullable(false);
          $table->string('material', 60)->nullable(false);
          $table->text('description')->nullable(false);
          $table->unsignedInteger('brand_id');
          $table->integer('qty')->unsignedInteger();
          $table->float('size')->unsignedInteger();
          $table->unsignedInteger('order_id');
          $table->unsignedInteger('user_id')->nullable(false);
          $table->foreign('order_id')->references('id')->on('orders');
          $table->foreign('brand_id')->references('id')->on('brands');
          $table->timestamp('updated_at')->useCurrent();
          $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
