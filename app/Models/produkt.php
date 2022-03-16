<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produkt extends Model
{
    use HasFactory;
    protected $produkt=[];
    public function koszyk()
    {
      return $this->belongsToMany(koszyk::class,'id_produktu');
    }
}
