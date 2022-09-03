<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_payouts', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_id');
            $table->integer('contest_id');
            $table->string('contest_name');
            $table->integer('payout_amount');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('bank_name');
            $table->integer('approval_status')->default(2);
            $table->integer('payment_status')->default(2);
            $table->string('proof_of_payment')->nullable();
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
        Schema::dropIfExists('request_payouts');
    }
};
