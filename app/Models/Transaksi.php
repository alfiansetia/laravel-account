<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'desc', 'status', 'amount', 'nasabah_id'];

    public function nasabah(){
        return $this->belongsTo(Nasabah::class);
    }

}
