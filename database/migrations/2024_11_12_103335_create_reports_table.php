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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->enum('status', ['pending', 'Adopted', 'Rescued']);
            $table->string('rescuer');
            $table->string('image');
            $table->string('name');
            $table->enum('gender',['Male', 'Female', 'Unknown']);
            $table->enum('species',['Cat', 'Dog', 'Lizard', 'Snake', 'Wild']);
            $table->string('age');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
