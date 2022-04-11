<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matakuliah;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        Matakuliah::create([
            'kode_mk' => 'INF108',
            'nama_mk' => 'Pemrograman',
            'sks' => 4,
            'semester' => 2,
            'dosen_pengampu' => 'Irvanizam Zamanhuri'
        ]);

        Matakuliah::create([
            'kode_mk' => 'INF112',
            'nama_mk' => 'Jaringan Komputer',
            'sks' => 3,
            'semester' => 2,
            'dosen_pengampu' => 'Arie Budiansyah'
        ]);

        Matakuliah::create([
            'kode_mk' => 'INF114',
            'nama_mk' => 'Basis Data',
            'sks' => 3,
            'semester' => 2,
            'dosen_pengampu' => 'Viska Mutiawani'
        ]);

        Matakuliah::create([
            'kode_mk' => 'INF213',
            'nama_mk' => 'Pemrograman Berorientasi Objek',
            'sks' => 3,
            'semester' => 3,
            'dosen_pengampu' => 'Viska Mutiawani'
        ]);

        Matakuliah::create([
            'kode_mk' => 'INF219',
            'nama_mk' => 'Basis Data Lanjut',
            'sks' => 3,
            'semester' => 3,
            'dosen_pengampu' => 'Viska Mutiawani'
        ]);

        Matakuliah::create([
            'kode_mk' => 'INF221',
            'nama_mk' => 'Sistem Operasi',
            'sks' => 3,
            'semester' => 3,
            'dosen_pengampu' => 'Arie Budiansyah'
        ]);

        Matakuliah::create([
            'kode_mk' => 'INF227',
            'nama_mk' => 'Komputasi Numerik',
            'sks' => 3,
            'semester' => 3,
            'dosen_pengampu' => 'Nazaruddin Abdullah'
        ]);

        Matakuliah::create([
            'kode_mk' => 'INF206',
            'nama_mk' => 'Rekayasa Perangkat Lunak',
            'sks' => 3,
            'semester' => 4,
            'dosen_pengampu' => 'Rahmad Dawood'
        ]);

        Matakuliah::create([
            'kode_mk' => 'INF210',
            'nama_mk' => 'Sistem Informasi Geografis',
            'sks' => 3,
            'semester' => 4,
            'dosen_pengampu' => 'Ardiansyah'
        ]);

        Matakuliah::create([
            'kode_mk' => 'INF218',
            'nama_mk' => 'Struktur Data dan Algoritma',
            'sks' => 3,
            'semester' => 4,
            'dosen_pengampu' => 'Alim Misbullah'
        ]);

        Matakuliah::create([
            'kode_mk' => 'INF220',
            'nama_mk' => 'Komunikasi Data',
            'sks' => 3,
            'semester' => 4,
            'dosen_pengampu' => 'Muhammad Iqbal'
        ]);

        Matakuliah::create([
            'kode_mk' => 'INF224',
            'nama_mk' => 'Pemrograman Berbasis Web',
            'sks' => 3,
            'semester' => 4,
            'dosen_pengampu' => 'Kurnia Saputra'
        ]);
    }
}
