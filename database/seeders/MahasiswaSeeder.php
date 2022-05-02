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
            'nip' => '2008107010013',
            'nama' => 'Daffa Mudhaffar',
            'jurusan' => 'Informatika',
        ]);

        Mahasiswa::create([
            'nip' => '2008107010020',
            'nama' => 'M. Ikhsan Fikri',
            'jurusan' => 'Informatika',
        ]);

        Admin::create([
            'nip' => '198103152003121003',
            'nama' => 'Irvanizam Zamanhuri, S.Si, M.Sc'
        ]);
    }
}
