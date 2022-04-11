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
    }
}
