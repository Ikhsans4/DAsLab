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

        Matakuliah::create([
            'nip_dosen' => '197303311998021001',
            'kode_mk' => 'MBI106',
            'nama_mk' => 'Biologi Sel',
            'sks' => '3',
            'semester' => '2',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197507172000122001',
            'kode_mk' => 'MBI114',
            'nama_mk' => 'Genetika',
            'sks' => '3',
            'semester' => '2',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198202032008122001',
            'kode_mk' => 'MBI110',
            'nama_mk' => 'Biokimia',
            'sks' => '3',
            'semester' => '2',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197112121998032001',
            'kode_mk' => 'MBI209',
            'nama_mk' => 'Struktur Hewan',
            'sks' => '3',
            'semester' => '3',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198207282006042002',
            'kode_mk' => 'MBI207',
            'nama_mk' => 'Struktur Tumbuhan',
            'sks' => '3',
            'semester' => '3',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197503212008121001',
            'kode_mk' => 'MBI221',
            'nama_mk' => 'Biogeomatika',
            'sks' => '3',
            'semester' => '3',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197303311998021001',
            'kode_mk' => 'MBI215',
            'nama_mk' => 'Biologi Molekular',
            'sks' => '3',
            'semester' => '3',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197507172000122001',
            'kode_mk' => 'MBI219',
            'nama_mk' => 'Dasar-Dasar Ekologi',
            'sks' => '3',
            'semester' => '3',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198202032008122001',
            'kode_mk' => 'MBI217',
            'nama_mk' => 'Mikrobiologi Dasar',
            'sks' => '3',
            'semester' => '3',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197112121998032001',
            'kode_mk' => 'MBI222',
            'nama_mk' => 'Fisiologi Mikroba',
            'sks' => '2',
            'semester' => '4',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198207282006042002',
            'kode_mk' => 'MBI226',
            'nama_mk' => 'Pengantar Bioinformatika',
            'sks' => '1',
            'semester' => '4',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197503212008121001',
            'kode_mk' => 'MBI218',
            'nama_mk' => 'Fisiologi Tumbuhan',
            'sks' => '1',
            'semester' => '4',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197303311998021001',
            'kode_mk' => 'MBI228',
            'nama_mk' => 'Fisiologi Hewan',
            'sks' => '1',
            'semester' => '4',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197507172000122001',
            'kode_mk' => 'MBI216',
            'nama_mk' => 'Biosistematika Hewan',
            'sks' => '1',
            'semester' => '4',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198202032008122001',
            'kode_mk' => 'MBI214',
            'nama_mk' => 'Biosistematika Tumbuhan',
            'sks' => '1',
            'semester' => '4',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197112121998032001',
            'kode_mk' => 'MBI224',
            'nama_mk' => 'Biologi Konservasi',
            'sks' => '1',
            'semester' => '4',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198207282006042002',
            'kode_mk' => 'MBI325',
            'nama_mk' => 'Perkembangan Hewan',
            'sks' => '1',
            'semester' => '5',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197503212008121001',
            'kode_mk' => 'MBI327',
            'nama_mk' => 'Biologi Hutan Tropis',
            'sks' => '1',
            'semester' => '5',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197303311998021001',
            'kode_mk' => 'MBI329',
            'nama_mk' => 'Biologi Laut',
            'sks' => '1',
            'semester' => '5',
            'jurusan' => 'Biologi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197507172000122001',
            'kode_mk' => 'MBI323',
            'nama_mk' => 'Perkembangan Tumbuhan',
            'sks' => '1',
            'semester' => '5',
            'jurusan' => 'Biologi'
        ]);

        Matakuliah::create([
            'nip_dosen' => '198109252008122002',
            'kode_mk' => 'MFI108',
            'nama_mk' => 'Anatomi Dan Fisiologi Manusia',
            'sks' => '1',
            'semester' => '2',
            'jurusan' => 'Farmasi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198101182006042001',
            'kode_mk' => 'MFI114',
            'nama_mk' => 'Farmasetika',
            'sks' => '1',
            'semester' => '2',
            'jurusan' => 'Farmasi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197711072010122001',
            'kode_mk' => 'MFI110',
            'nama_mk' => 'Kimia Organik',
            'sks' => '1',
            'semester' => '2',
            'jurusan' => 'Farmasi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197602062009121002',
            'kode_mk' => 'MFI227',
            'nama_mk' => 'Farmasi Fisika',
            'sks' => '1',
            'semester' => '3',
            'jurusan' => 'Farmasi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198203232012122001',
            'kode_mk' => 'MFI229',
            'nama_mk' => 'Biokimia',
            'sks' => '1',
            'semester' => '3',
            'jurusan' => 'Farmasi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198505022014042002',
            'kode_mk' => 'MFI219',
            'nama_mk' => 'Kimia Analisa',
            'sks' => '1',
            'semester' => '3',
            'jurusan' => 'Farmasi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198109252008122002',
            'kode_mk' => 'MFI239',
            'nama_mk' => 'Mikrobiologi Dan Virologi',
            'sks' => '1',
            'semester' => '3',
            'jurusan' => 'Farmasi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198101182006042001',
            'kode_mk' => 'MFI256',
            'nama_mk' => 'Botani Farmasi',
            'sks' => '1',
            'semester' => '4',
            'jurusan' => 'Farmasi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197711072010122001',
            'kode_mk' => 'MFI258',
            'nama_mk' => 'Analisa Farmasi',
            'sks' => '1',
            'semester' => '4',
            'jurusan' => 'Farmasi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197602062009121002',
            'kode_mk' => 'MFI206',
            'nama_mk' => 'Teknologi Sediaan Farmasi Solid',
            'sks' => '1',
            'semester' => '4',
            'jurusan' => 'Farmasi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198203232012122001',
            'kode_mk' => 'MFI210',
            'nama_mk' => 'Farmakologi II',
            'sks' => '1',
            'semester' => '4',
            'jurusan' => 'Farmasi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198505022014042002',
            'kode_mk' => 'MFI317',
            'nama_mk' => 'Analisa Sediaan Farmasi',
            'sks' => '1',
            'semester' => '5',
            'jurusan' => 'Farmasi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198109252008122002',
            'kode_mk' => 'MFI329',
            'nama_mk' => 'Teknologi Sediaan Farmasi Likuida Dan Semisolid',
            'sks' => '1',
            'semester' => '5',
            'jurusan' => 'Farmasi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198101182006042001',
            'kode_mk' => 'MFI323',
            'nama_mk' => 'Farmakognosi',
            'sks' => '1',
            'semester' => '5',
            'jurusan' => 'Farmasi'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197711072010122001',
            'kode_mk' => 'MFI325',
            'nama_mk' => 'Biofarmasi Dan Farmakokinetika',
            'sks' => '1',
            'semester' => '5',
            'jurusan' => 'Farmasi'
        ]);

        Matakuliah::create([
            'nip_dosen' => '197107061994121001',
            'kode_mk' => 'PHY104',
            'nama_mk' => 'Fisika Dasar',
            'sks' => '1',
            'semester' => '2',
            'jurusan' => 'Fisika'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '196712241994031001',
            'kode_mk' => 'PHY205',
            'nama_mk' => 'Termodinamika',
            'sks' => '1',
            'semester' => '3',
            'jurusan' => 'Fisika'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '196609281994031014',
            'kode_mk' => 'PHY207',
            'nama_mk' => 'Elektronika',
            'sks' => '1',
            'semester' => '3',
            'jurusan' => 'Fisika'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197208311998021001',
            'kode_mk' => 'PHY209',
            'nama_mk' => 'Eksperimen Fisika I',
            'sks' => '1',
            'semester' => '3',
            'jurusan' => 'Fisika'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197312072003121002',
            'kode_mk' => 'PHY210',
            'nama_mk' => 'Eksperimen Fisika II',
            'sks' => '2',
            'semester' => '4',
            'jurusan' => 'Fisika'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '196102011997021001',
            'kode_mk' => 'PHY309',
            'nama_mk' => 'Eksperimen Fisika III',
            'sks' => '1',
            'semester' => '5',
            'jurusan' => 'Fisika'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197107061994121001',
            'kode_mk' => 'PHY301',
            'nama_mk' => 'Algoritma Dan Pemrograman',
            'sks' => '1',
            'semester' => '5',
            'jurusan' => 'Fisika'
        ]);

        Matakuliah::create([
            'nip_dosen' => '198508142014042001',
            'kode_mk' => 'MMT114',
            'nama_mk' => 'Algoritma Dan Pemrograman',
            'sks' => '1',
            'semester' => '2',
            'jurusan' => 'Matematika'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197010121995122002',
            'kode_mk' => 'MMT227',
            'nama_mk' => 'Etnomatematika',
            'sks' => '1',
            'semester' => '3',
            'jurusan' => 'Matematika'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197506091999032001',
            'kode_mk' => 'MMT217',
            'nama_mk' => 'Pengantar Metode Numerik',
            'sks' => '1',
            'semester' => '3',
            'jurusan' => 'Matematika'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197006081994122001',
            'kode_mk' => 'MMT216',
            'nama_mk' => 'Metode Numerik',
            'sks' => '1',
            'semester' => '4',
            'jurusan' => 'Matematika'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '197004071995121001',
            'kode_mk' => 'MMT226',
            'nama_mk' => 'Pengantar Optimasi',
            'sks' => '1',
            'semester' => '4',
            'jurusan' => 'Matematika'
        ]);
        
        Matakuliah::create([
            'nip_dosen' => '198006072008122001',
            'kode_mk' => 'MMT321',
            'nama_mk' => 'Program Linier',
            'sks' => '1',
            'semester' => '5',
            'jurusan' => 'Matematika'
        ]);
    }
}
