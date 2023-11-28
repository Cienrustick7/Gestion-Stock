<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factures extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'total_ht',
        'total_tva ',
        'total_ttc',

    ];
    function produit(){
        return $this->belongsTo(produits::class, 'produits_id');
       }
       function client(){
        return $this->belongsTo(clients::class, 'clients_id');
       }
}
