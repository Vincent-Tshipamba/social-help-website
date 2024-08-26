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
        Schema::create('demandeurs', function (Blueprint $table) {
            $table->id('num_demandeur');
            $table->string('noms_demandeur');
            $table->string('sexe');
            $table->date('datnais');
            $table->string('adresse');
            $table->string('contact');
            $table->string('profess');
            $table->string('departement');
            $table->unsignedBigInteger('codcell');
            $table->foreign('codcell')->references('codcell')->on('cellules')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandeurs');
    }
};
