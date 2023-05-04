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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('checkout_id');
            $table->decimal('amount', 8, 2);
            $table->dateTime('paid_at');
            $table->enum('status', ['paid', 'pending'])->default('pending');
            $table->timestamps();
        
            $table->foreign('checkout_id')->references('id')->on('checkouts');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
