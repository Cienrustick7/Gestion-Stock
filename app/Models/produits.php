<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'stock',
        'image ',

    ];
    function entre(){
        return $this->hasOne(entre::class);
}

function sorties(){
    return $this->hasOne(sortie::class);
}

function facture(){
    return $this->hasOne(factures::class);
}
}
