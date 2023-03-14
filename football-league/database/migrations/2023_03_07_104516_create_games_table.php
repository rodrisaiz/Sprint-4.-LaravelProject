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
        Schema::create('games', function (Blueprint $table) {

            $table->id();
            $table->foreignId('Team1_id')->references('id')->on('teams')->onDelete('cascade');
            $table->integer('goals_Team1')->nullable();
            $table->foreignId('Team2_id')->references('id')->on('teams')->onDelete('cascade');
            $table->integer('goals_Team2')->nullable();
            $table->string('stadium');
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
