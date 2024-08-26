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
        Schema::create('participers', function (Blueprint $table) {
            $table->id();
            $table->date('datcontribu');
            $table->text('motifcontr');
            $table->time('heure');
            $table->string('montantcontr');
            $table->string('modeparticipat');
            $table->text('observation');
            $table->unsignedBigInteger('numaid');
            $table->unsignedBigInteger('iddonat');
            $table->foreign('numaid')->references('numaid')->on('aide_sociales')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('iddonat')->references('iddonat')->on('donateurs')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participers');
    }
};
