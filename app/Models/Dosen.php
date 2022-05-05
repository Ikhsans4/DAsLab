<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $fillable = ['nip', 'nama', 'email'];

    public function matakuliah() {
        return $this->belongsTo(Matakuliah::class);
    }

    public function akunDosen() {
        return $this->hasOne(Account::class);
    }
}
