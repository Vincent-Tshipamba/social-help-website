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
        Schema::create('pastors', function (Blueprint $table) {
            $table->id('matri');
            $table->string('nompast');
            $table->string('postnom');
            $table->string('prenom');
            $table->string('fonction');
            $table->string('contact');
            $table->foreignId('codserv')->constrained(table: 'services', column: 'codserv'  , indexName: 'codserv')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pastors');
    }
};
