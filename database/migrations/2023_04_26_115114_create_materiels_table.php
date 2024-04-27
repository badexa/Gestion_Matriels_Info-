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
        Schema::create('materiels', function (Blueprint $table) {
            $table->id();
            $table->string('Article');
            $table->string('Qu');
            $table->string('Inv');
            $table->string('Date');
            $table->string('Marque');
            $table->string('Modéle');
            $table->string('Processeur');
            $table->string('Vitesse');
            $table->string('Ram');
            $table->string('Format');
            $table->string('Programme');
            $table->string('Projet');
            $table->string('Etat');
            $table->string('Etablissement');
            
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiels');
    }
};