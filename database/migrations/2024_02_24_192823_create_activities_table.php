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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('type'); // call, email, meeting, etc.
            $table->string('subject')->nullable();
            $table->date('due_date')->nullable();
            $table->dateTime('date');
            $table->integer('duration')->nullable(); // in minutes
            $table->text('notes')->nullable();
            $table->string('status')->default('scheduled'); // completed, scheduled, etc.

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
