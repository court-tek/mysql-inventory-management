<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('brands', function (Blueprint $table) {
          $table->foreign('user_id')->references('id')->on('users');
      });

      Schema::table('items', function (Blueprint $table) {
          $table->foreign('user_id')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('brands', function (Blueprint $table) {
          $table->dropForeign(['user_id']);
      });

      Schema::table('items', function (Blueprint $table) {
          $table->dropForeign(['user_id']);
      });
    }
}
