<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sorties extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'quantite',
        'date ',

    ];
    function produit(){
        return $this->belongsTo(produits::class, 'produits_id');
       }
}
