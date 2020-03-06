<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmerTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('farmer_id')->unsigned()->nullable();
            $table->foreign('farmer_id')->references('id')->on('users');
            $table->string('farmer_agent')->nullable();
            $table->string('amount')->nullable();
            $table->string('email')->nullable();
            $table->string('items')->nullable();
            $table->string('phone')->nullable();
            $table->string('fullname')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('service_type')->nullable();
            $table->string('subscription_title')->nullable();
            $table->string('building_specification')->nullable();
            $table->string('notes')->nullable();
            $table->string('paystack_ref')->nullable();
            $table->string('transaction_status')->nullable();
            $table->string('subscription_type')->nullable();
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
        Schema::dropIfExists('farmer_transactions');
    }
}
