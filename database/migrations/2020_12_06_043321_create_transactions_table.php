<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('origin_id');
            $table->foreignId('origin_id')->constrained('origins');
            $table->unsignedBigInteger('payment_method_id');
            $table->foreignId('payment_method_id')->constrained('payment_methodes');
            $table->unsignedBigInteger('transaction_type_id');
            $table->foreignId('transaction_type_id')->constrained('transaction_types');
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
        Schema::dropIfExists('transactions');
    }
}
