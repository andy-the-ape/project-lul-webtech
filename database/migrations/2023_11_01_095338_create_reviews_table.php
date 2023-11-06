<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('game_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('game_id')->references('game_id')->on('games');
            $table->primary(['user_id','game_id']);
            $table->string('description');
            $table->float('rating');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
