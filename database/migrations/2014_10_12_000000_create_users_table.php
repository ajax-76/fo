<?php

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
            $table->increments('id');
            $table->string('name');
            $table->string('number');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('landmark');
            $table->rememberToken();
            $table->string('billing_name');
            $table->string('billing_address');
            $table->integer('pincode');
            $table->string('billing_country');
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
        Schema::drop('users');
    }
}
