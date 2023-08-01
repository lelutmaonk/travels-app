<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'pakets_id', 'id');
    }

    public function detail()
    {
        return $this->hasMany(JadwalDetail::class, 'jadwals_id', 'id');
    }

}
