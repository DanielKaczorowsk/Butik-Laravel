<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koszyk extends Model
{
    protected $koszyk=[];
    public function user()
    {
      return $this->hasMany(User::class,'id');
    }
    public function produkt()
    {
        return $this->hasMany(produkt::class,'id');
    }
}
