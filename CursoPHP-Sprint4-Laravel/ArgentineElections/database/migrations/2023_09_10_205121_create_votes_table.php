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
        Schema::create('votes', function (Blueprint $table) {
            $table->unsignedInteger('quantity');
            $table->unsignedBigInteger('alternative_id');
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('election_id');
            $table->timestamps();

            // Define foreign key constraints
            $table->primary(['election_id', 'province_id', 'alternative_id']);

            // Define foreign key constraints
            $table->foreign('election_id')->references('id')->on('elections');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('alternative_id')->references('id')->on('alternatives');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
