<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    use HasFactory;
    protected $fillable = ['nasabah_id', 'amount'];

    public function nasabah(){
        return $this->belongsTo(Nasabah::class);
    }
}
