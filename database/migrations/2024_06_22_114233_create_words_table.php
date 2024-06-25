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
        Schema::create('words', function (Blueprint $table) {
            $table->integer('id', true);

            $table->string('word');
            $table->string('meaning')->nullable();
            $table->string('pronunciation')->nullable();
            $table->string('like')->nullable();
            $table->text('details')->nullable();

            $table->integer('letter_id');
            $table->foreign('letter_id')->references('id')->on('letters');

            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('words');
    }
};
