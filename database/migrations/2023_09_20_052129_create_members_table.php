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
        Schema::create('members', function (Blueprint $table) {
            $table->bigInteger('serial')->unique();
            $table->string('user',10)->unique();
            $table->string('log_user')->unique();
            $table->string('password');
            $table->string('pin');
            $table->integer('position');
            $table->integer('mail_verify')->default('0');
            $table->integer('active')->default('1');
            $table->string('upline');
            $table->string('pack');
            $table->integer('point');
            $table->float('direct',8,2);
            $table->integer('paid')->default('0');
            $table->float('matching');
            $table->string('sponsor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
