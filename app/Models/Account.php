<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function mahasiswa() {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function admin() {
        return $this->belongsTo(Admin::class);
    }
}
