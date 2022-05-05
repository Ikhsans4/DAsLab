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
    public function run()
    {
        Matakuliah::create([
            'nip_dosen' => '198103152003121003',
            'kode_mk' => 'INF108',
            'nama_mk' => 'Pemrograman',
            'sks' => 4,
            'semester' => 2,
            'jurusan' => 'Informatika'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197808152010121002',
            'kode_mk' => 'INF112',
            'nama_mk' => 'Jaringan Komputer',
            'sks' => 3,
            'semester' => 2,
            'jurusan' => 'Informatika'
        ]);

        Matakuliah::create([
            'nip_dosen' => '198008312009122003',
            'kode_mk' => 'INF114',
            'nama_mk' => 'Basis Data',
            'sks' => 3,
            'semester' => 2,
            'jurusan' => 'Informatika'
        ]);

        Matakuliah::create([
            'nip_dosen' => '198008312009122003',
            'kode_mk' => 'INF213',
            'nama_mk' => 'Pemrograman Berorientasi Objek',
            'sks' => 3,
            'semester' => 3,
            'jurusan' => 'Informatika'
        ]);

        Matakuliah::create([
            'nip_dosen' => '198008312009122003',
            'kode_mk' => 'INF219',
            'nama_mk' => 'Basis Data Lanjut',
            'sks' => 3,
            'semester' => 3,
            'jurusan' => 'Informatika'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197808152010121002',
            'kode_mk' => 'INF221',
            'nama_mk' => 'Sistem Operasi',
            'sks' => 3,
            'semester' => 3,
            'jurusan' => 'Informatika'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197202061997021001',
            'kode_mk' => 'INF227',
            'nama_mk' => 'Komputasi Numerik',
            'sks' => 3,
            'semester' => 3,
            'jurusan' => 'Informatika'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197203181995121001',
            'kode_mk' => 'INF206',
            'nama_mk' => 'Rekayasa Perangkat Lunak',
            'sks' => 3,
            'semester' => 4,
            'jurusan' => 'Informatika'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197212261992011001',
            'kode_mk' => 'INF210',
            'nama_mk' => 'Sistem Informasi Geografis',
            'sks' => 3,
            'semester' => 4,
            'jurusan' => 'Informatika'
        ]);

        Matakuliah::create([
            'nip_dosen' => '198806032019031011',
            'kode_mk' => 'INF218',
            'nama_mk' => 'Struktur Data dan Algoritma',
            'sks' => 3,
            'semester' => 4,
            'jurusan' => 'Informatika'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197705082003121003',
            'kode_mk' => 'INF220',
            'nama_mk' => 'Komunikasi Data',
            'sks' => 3,
            'semester' => 4,
            'jurusan' => 'Informatika'
        ]);

        Matakuliah::create([
            'nip_dosen' => '198003262014041001',
            'kode_mk' => 'INF224',
            'nama_mk' => 'Pemrograman Berbasis Web',
            'sks' => 3,
            'semester' => 4,
            'jurusan' => 'Informatika'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197203181995121001',
            'kode_mk' => 'MPA105',
            'nama_mk' => 'Pengantar Kimia',
            'sks' => 3,
            'semester' => 1,
            'jurusan' => 'Kimia'
        ]);
    }
}
