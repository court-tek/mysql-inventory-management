<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users', function (Blueprint $table) {
          $table->increments('id')->unsignedInteger()->nullable(false);
          $table->string('f_name', 60);
          $table->string('l_name', 60);
          $table->string('email', 60)->nullubale(false)->unique();
          $table->string('phone_number', 20)->nullable(false);
          $table->string('birth_date')->nullable(false);
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
        Schema::dropIfExists('users');
    }
}
