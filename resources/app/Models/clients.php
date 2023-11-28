<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'adresse ',
        'telephone ',
        'email '
    ];
    function facture(){
        return $this->hasOne(factures::class);
}
}
