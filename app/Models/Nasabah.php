<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }

    public function poin(){
        return $this->hasMany(Poin::class);
    }
}
