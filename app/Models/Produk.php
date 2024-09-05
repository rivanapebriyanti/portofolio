<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;

class Produk extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function categorie(){
        return $this->belongsTo(Categorie::class, "categories_id");
    
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class,'id_produk');
    }
}
