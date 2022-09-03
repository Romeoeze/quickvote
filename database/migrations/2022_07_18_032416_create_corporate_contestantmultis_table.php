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
        Schema::create('corporate_contestantmultis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->nullable();
            $table->foreignId('corporate_multicontest_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('passcode')->nullable()->unique();
            $table->string('image')->nullable()->unique();
            $table->foreignId('corporate_category_id')->nullable();
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
        Schema::dropIfExists('corporate_contestantmultis');
    }
};
