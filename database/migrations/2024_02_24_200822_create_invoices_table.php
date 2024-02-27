<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('deal_id')->constrained();
            $table->foreignId('contact_id')->constrained();
            $table->foreignId('quote_id')->constrained(); 
            $table->string('invoice_number');
            $table->date('invoice_date');
            $table->date('due_date');
            $table->decimal('total', 10, 2);
            $table->enum('status', ['draft', 'sent', 'accepted', 'paid', 'cancelled'])->default('draft');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}

