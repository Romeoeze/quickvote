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
        Schema::create('vote_log_c_m_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('voter_id');
            $table->foreignId('contest_id');
            $table->foreignId('contestant_id');
            $table->foreignId('contestant_category_id');
            $table->integer('numberOfVotes');
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
        Schema::dropIfExists('vote_log_c_m_s');
    }
};
