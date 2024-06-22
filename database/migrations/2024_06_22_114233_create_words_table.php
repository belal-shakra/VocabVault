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
            $table->string('meaning');
            $table->string('pronunciation');
            $table->string('like');

            $table->integer('letter_id');
            $table->foreign('letter_id')->references('id')->on('letters');

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
