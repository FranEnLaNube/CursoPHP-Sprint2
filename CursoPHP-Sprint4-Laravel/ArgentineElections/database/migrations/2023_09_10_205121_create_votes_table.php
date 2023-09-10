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
            $table->id();
            $table->unsignedInteger('quantity');
            $table->unsignedBigInteger('alternative_id');
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('election_id');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('election_id')->references('_id')->on('elections')->onDelete('cascade');
            $table->foreign('province_id')->references('_id')->on('provinces')->onDelete('cascade');
            $table->foreign('alternative_id')->references('_id')->on('alternatives')->onDelete('cascade');
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
