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
            'email' => 'daffa@gmail.com',
        ]);

        Mahasiswa::create([
            'nim' => '1908107010013',
            'nama' => 'Mudhaffar',
            'jurusan' => 'Informatika',
            'email' => 'mudhaffar@gmail.com',
        ]);

        Mahasiswa::create([
            'nim' => '2008107010020',
            'nama' => 'M. Ikhsan Fikri',
            'jurusan' => 'Informatika',
            'email' => 'ikhsan@gmail.com',
        ]);

        Mahasiswa::create([
            'nim' => '2008101010014',
            'nama' => 'Yazid Zinedine Zidan',
            'jurusan' => 'Matematika',
            'email' => 'yazid@gmail.com',
        ]);

        Mahasiswa::create([
            'nim' => '2008103010049',
            'nama' => 'Saifullah',
            'jurusan' => 'Kimia',
            'email' => 'saiful@gmail.com',
        ]);

        Mahasiswa::create([
            'nim' => '2008108010034',
            'nama' => 'Tiara Putri Adlina',
            'jurusan' => 'Statistika',
            'email' => 'tiara@gmail.com',
        ]);

        Mahasiswa::create([
            'nim' => '2008109010012',
            'nama' => 'Tengku Delviza',
            'jurusan' => 'Farmasi',
            'email' => 'tengku@gmail.com',
        ]);

        Mahasiswa::create([
            'nim' => '2008102010043',
            'nama' => 'Muhammad Izam',
            'jurusan' => 'Fisika',
            'email' => 'izam@gmail.com',
        ]);

        Mahasiswa::create([
            'nim' => '2008104010084',
            'nama' => 'Nurul Hidayah Putri Nasution',
            'jurusan' => 'Biologi',
            'email' => 'nurul@gmail.com',
        ]);
    }
}
