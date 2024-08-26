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
        Schema::create('lancers', function (Blueprint $table) {
            $table->id();
            $table->date('datelan');
            $table->date('datlimit');
            $table->time('heure');
            $table->text('motif');
            $table->string('montbesoin');
            $table->unsignedBigInteger('matri');
            $table->unsignedBigInteger('numaid');
            $table->foreign('matri')->references('matri')->on('pastors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('numaid')->references('numaid')->on('aide_sociales')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lancers');
    }
};
