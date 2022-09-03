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
        Schema::create('voter_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('vendor_id');
            $table->foreignId('contest_id');
            $table->string('email')->unique();
            $table->string('vote_passcode')->unique();
            $table->integer('vote_limit')->default(1);
            $table->integer('status')->default(2);
            $table->boolean('hasvoted')->default(false);
            $table->boolean('haspaid')->default(false);
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
        Schema::dropIfExists('voter_c_s');
    }
};
