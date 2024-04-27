<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'Article',
        'Qu',
        'Inv',
        'Date',
        'Marque',
        'Modéle',
        'Processeur',
        'Vitesse',
        'Ram',
        'Format',
        'Programme',
        'Projet',
        'Etat',
        'Etablissement',
        
    ];

}




