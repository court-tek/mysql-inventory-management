<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->increments('id')->unsignedInteger();
          $table->string('title', 200)->nullable(false);
          $table->string('sku', 60)->nullable(false);
          $table->string('material', 60)->nullable(false);
          $table->text('description')->nullable(false);
          $table->unsignedInteger('brand_id');
          $table->integer('qty')->unsignedInteger();
          $table->float('size')->unsignedInteger();
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
        Schema::dropIfExists('products');
    }
}
