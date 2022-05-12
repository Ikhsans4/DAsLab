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
            'nim' => '2008101010014',
            'nama' => 'Yazid Zinedine Zidan',
            'jurusan' => 'Matematika',
        ]);

        Mahasiswa::create([
            'nim' => '2008103010049',
            'nama' => 'Saifullah',
            'jurusan' => 'Kimia',
        ]);

        Mahasiswa::create([
            'nim' => '2008108010034',
            'nama' => 'Tiara Putri Adlina',
            'jurusan' => 'Statistika',
        ]);

        Mahasiswa::create([
            'nim' => '2008109010012',
            'nama' => 'Tengku Delviza',
            'jurusan' => 'Farmasi',
        ]);

        Mahasiswa::create([
            'nim' => '2008102010043',
            'nama' => 'Muhammad Izam',
            'jurusan' => 'Fisika',
        ]);

        Mahasiswa::create([
            'nim' => '2008104010084',
            'nama' => 'Nurul Hidayah Putri Nasution',
            'jurusan' => 'Biologi',
        ]);
    }
}
