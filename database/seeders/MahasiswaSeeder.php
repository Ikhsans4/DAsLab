<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'nim' => '2008107010013',
            'nama' => 'Daffa Mudhaffar',
            'jurusan' => 'Informatika',
        ]);

        Mahasiswa::create([
            'nim' => '2008107010020',
            'nama' => 'M. Ikhsan Fikri',
            'jurusan' => 'Informatika',
        ]);

        Mahasiswa::create([
            'nim' => '2008103010038',
            'nama' => 'Al-Karim',
            'jurusan' => 'Kimia',
        ]);
    }
}
