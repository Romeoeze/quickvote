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
        Schema::create('corporate_single_contestants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contest_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('passcode')->nullable()->unique();
            $table->string('image')->nullable()->unique();
            $table->longText('bio')->nullable();
            $table->integer('vote_total')->default(0);
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
        Schema::dropIfExists('corporate_single_contestants');
    }
};
