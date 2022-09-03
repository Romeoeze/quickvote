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
        Schema::create('vote_purchase_multis', function (Blueprint $table) {
            $table->id();
            $table->string('contestant_id');
            $table->string('voterName');
            $table->string('voterEmail');
            $table->string('numberofVotesPurchased');
            $table->string('pricePerVote');
            $table->integer('totalAmountPaid');
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
        Schema::dropIfExists('vote_purchase_multis');
    }
};
