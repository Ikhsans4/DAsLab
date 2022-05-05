<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nip', 'nama', 'jurusan'];

    public function akunKrs() {
        return $this->hasOne(Account::class);
    }
}
