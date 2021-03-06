<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KrsAccount extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function mahasiswa() {
        return $this->belongsTo(Mahasiswa::class, 'nim_mhs', 'nim');
    }
}
