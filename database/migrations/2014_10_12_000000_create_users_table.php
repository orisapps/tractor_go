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
            $table->increments('id');
            $table->string('fullname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('phone')->nullable();
            $table->string('account_type')->nullable();
            $table->string('state')->nullable();
            $table->string('email')->nullable()->unique();
            $table->integer('role')->nullable();
            $table->string('photo')->nullable();
            $table->string('address')->nullable();
            $table->string('location')->nullable();
            $table->string('farmer_agent')->nullable();
            $table->string('agent_code')->nullable()->unique();
            $table->string('farm_name')->nullable();
            $table->string('farm_address')->nullable();
            $table->string('farm_type')->nullable();
            $table->string('attached_cluster')->nullable();
            $table->string('description')->nullable();
            $table->string('tractor_type')->nullable();
            $table->string('tractor_model')->nullable();
            $table->string('tractor_location')->nullable();
            $table->integer('mileage')->nullable();
            $table->integer('user_type')->nullable();
            $table->timestamps();
            $table->string('password')->nullable();
            $table->rememberToken()->nullable();

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
