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
        Schema::create('demandes', function (Blueprint $table) {
            $table->id('numdem');
            $table->date('datdem');
            $table->text('motif');
            $table->time('heuredem');
            $table->string('montdema');
            $table->unsignedBigInteger('num_demandeur');
            $table->foreign('num_demandeur')->references('num_demandeur')->on('demandeurs')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
