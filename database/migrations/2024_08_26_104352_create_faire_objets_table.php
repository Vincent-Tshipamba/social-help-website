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
        Schema::create('faire_objets', function (Blueprint $table) {
            $table->id();
            $table->date('datanalys');
            $table->text('reponse');
            $table->unsignedBigInteger('numanalys');
            $table->unsignedBigInteger('numdem');
            $table->unsignedBigInteger('matri');
            $table->foreign('matri')->references('num_demandeur')->on('demandeurs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('numdem')->references('numdem')->on('demandes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('numanalys')->references('numanalys')->on('analyses')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faire_objets');
    }
};
