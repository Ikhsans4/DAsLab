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
            'jurusan' => 'Informatika',
            'link_pic' => 'https://wallup.net/wp-content/uploads/2017/11/16/170803-Python_programming-Linux.jpg'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197808152010121002',
            'kode_mk' => 'INF112',
            'nama_mk' => 'Jaringan Komputer',
            'sks' => 3,
            'semester' => 2,
            'jurusan' => 'Informatika',
            'link_pic' => 'https://wallpapercave.com/wp/wp9501490.jpg'
        ]);

        Matakuliah::create([
            'nip_dosen' => '198008312009122003',
            'kode_mk' => 'INF114',
            'nama_mk' => 'Basis Data',
            'sks' => 3,
            'semester' => 2,
            'jurusan' => 'Informatika',
            'link_pic' => 'https://cdn.wallpapersafari.com/2/36/bOoCKX.jpg'
        ]);

        Matakuliah::create([
            'nip_dosen' => '198008312009122003',
            'kode_mk' => 'INF213',
            'nama_mk' => 'Pemrograman Berorientasi Objek',
            'sks' => 3,
            'semester' => 3,
            'jurusan' => 'Informatika',
            'link_pic' => 'https://www.techfry.com/images/articles/php/object-oriented-programming.jpg'
        ]);

        Matakuliah::create([
            'nip_dosen' => '198008312009122003',
            'kode_mk' => 'INF219',
            'nama_mk' => 'Basis Data Lanjut',
            'sks' => 3,
            'semester' => 3,
            'jurusan' => 'Informatika',
            'link_pic' => 'https://www.snti.in/images/plsql-card.png'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197808152010121002',
            'kode_mk' => 'INF221',
            'nama_mk' => 'Sistem Operasi',
            'sks' => 3,
            'semester' => 3,
            'jurusan' => 'Informatika',
            'link_pic' => 'https://wallpapercave.com/wp/wp7553379.png'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197202061997021001',
            'kode_mk' => 'INF227',
            'nama_mk' => 'Komputasi Numerik',
            'sks' => 3,
            'semester' => 3,
            'jurusan' => 'Informatika',
            'link_pic' => 'https://www.gatescambridge.org/wp-content/uploads/2015/09/32742maths.jpg'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197203181995121001',
            'kode_mk' => 'INF206',
            'nama_mk' => 'Rekayasa Perangkat Lunak',
            'sks' => 3,
            'semester' => 4,
            'jurusan' => 'Informatika',
            'link_pic' => 'https://static.vecteezy.com/system/resources/previews/000/180/409/large_2x/software-engineers-vector.png'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197212261992011001',
            'kode_mk' => 'INF210',
            'nama_mk' => 'Sistem Informasi Geografis',
            'sks' => 3,
            'semester' => 4,
            'jurusan' => 'Informatika',
            'link_pic' => 'https://gisgeography.com/wp-content/uploads/2014/07/What-Is-Geographic-Information-Systems-Featured-1265x727.jpg'
        ]);

        Matakuliah::create([
            'nip_dosen' => '198806032019031011',
            'kode_mk' => 'INF218',
            'nama_mk' => 'Struktur Data dan Algoritma',
            'sks' => 3,
            'semester' => 4,
            'jurusan' => 'Informatika',
            'link_pic' => 'https://matheusrumetna.com/wp-content/uploads/2019/07/datastructureandalgorithms.jpg'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197705082003121003',
            'kode_mk' => 'INF220',
            'nama_mk' => 'Komunikasi Data',
            'sks' => 3,
            'semester' => 4,
            'jurusan' => 'Informatika',
            'link_pic' => 'https://media.istockphoto.com/vectors/wifi-router-icon-flat-vector-id1203428339?b=1&k=20&m=1203428339&s=612x612&w=0&h=1SYNTFnzK_wJ9D3GapRzBGU1RMXDPDEiWerey-UcVCo='
        ]);

        Matakuliah::create([
            'nip_dosen' => '198003262014041001',
            'kode_mk' => 'INF224',
            'nama_mk' => 'Pemrograman Berbasis Web',
            'sks' => 3,
            'semester' => 4,
            'jurusan' => 'Informatika',
            'link_pic' => 'https://www.wallpaperkiss.com/wimg/b/160-1605037_big.jpg'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197002212000032002',
            'kode_mk' => 'MPA105',
            'nama_mk' => 'Pengantar Kimia',
            'sks' => 3,
            'semester' => 1,
            'jurusan' => 'Kimia',
            'link_pic' => 'https://u7.uidownload.com/vector/138/420/vector-beaker-vector-design-svg.jpg'
        ]);
    }
}
