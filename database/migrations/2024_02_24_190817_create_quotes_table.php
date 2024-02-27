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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deal_id');
            $table->unsignedBigInteger('contact_id');
            $table->date('quote_date');
            $table->date('expiry_date');
            $table->decimal('total', 10, 2);
            $table->string('status');
            $table->timestamps();
// In the quotes migration file

            $table->foreign('deal_id')->references('id')->on('deals')->onDelete('cascade');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
