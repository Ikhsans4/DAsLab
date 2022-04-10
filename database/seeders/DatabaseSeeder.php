<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matakuliah;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

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
            'dosen_pengampu' => 'Viska Mutiawati'
        ]);

        Matakuliah::create([
            'kode_mk' => 'INF213',
            'nama_mk' => 'Pemrograman Berorientasi Objek',
            'sks' => 3,
            'semester' => 3,
            'dosen_pengampu' => 'Viska Mutiawati'
        ]);

        Matakuliah::create([
            'kode_mk' => 'INF219',
            'nama_mk' => 'Basis Data Lanjut',
            'sks' => 3,
            'semester' => 3,
            'dosen_pengampu' => 'Viska Mutiawati'
        ]);

        Matakuliah::create([
            'kode_mk' => 'INF221',
            'nama_mk' => 'Sistem Operasi',
            'sks' => 3,
            'semester' => 3,
            'dosen_pengampu' => 'Arie Budiansyah'
        ]);
    }
}
