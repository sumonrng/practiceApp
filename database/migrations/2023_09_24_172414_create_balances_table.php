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
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->string('user',10)->unique();
            // $table->unsignedBigInteger('bid');
            // $table->foreign('bid')->references('serial')->on('members');
            $table->integer('total_in_taka')->nullable();
            $table->integer('total_out_taka')->nullable();
            $table->integer('final_taka')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balances');
    }
};
