<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function ketentuan()
    {
        return $this->hasMany(Ketentuan::class, 'pakets_id', 'id');
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'pakets_id', 'id');
    }

}
