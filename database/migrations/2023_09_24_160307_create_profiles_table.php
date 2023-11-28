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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('pid');
            $table->string('user',10)->unique();
           // $table->foreign('pid')->references('serial')->on('members')
            // $table->foreignId('pid')->constrained('members')
            //->cascadeOnUpdate()
            //->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->string('photo')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->integer('mobile')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal')->nullable();
            $table->string('voter')->nullable()->unique();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('national')->nullable();
            $table->string('mbank')->nullable();
            $table->string('perfectmoney')->nullable();
            $table->string('pmaccount')->nullable();
            $table->string('blood')->nullable();
            $table->date('birth')->nullable();
            $table->string('bank')->nullable();
            $table->string('branch')->nullable();
            $table->string('account')->nullable();
            $table->string('payee')->nullable();
            $table->string('swift')->nullable();
            $table->string('rank')->nullable();
            $table->string('epin')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
