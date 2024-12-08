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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('image');
            $table->string('name');
            $table->enum('gender',['Male', 'Female', 'Unknown']);
            $table->enum('species',['Cat', 'Dog', 'Rabbit', 'Hamster', 'Bird', 'Lizard', 'Snake', 'Wild', 'Other']);
            $table->string('age');
            $table->enum('status', ['Pending', 'Adopted', 'Rescued']);
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
