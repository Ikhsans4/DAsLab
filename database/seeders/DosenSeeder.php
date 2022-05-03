<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::create([
            'nip' => '198103152003121003',
            'nama' => 'Irvanizam Zamanhuri, S.Si, M.Sc',
            'email' => 'irvanizam.zamanhuri@informatika.unsyiah.ac.id'
        ]);

        Dosen::create([
            'nip' => '197808152010121002',
            'nama' => 'Arie Budiansyah, ST., M.Eng',
            'email' => 'arie.b@informatika.unsyiah.ac.id'
        ]);

        Dosen::create([
            'nip' => '198008312009122003',
            'nama' => 'Viska Mutiawani, S.Sn, M.IT',
            'email' => 'viska@unsyiah.ac.id'
        ]);

        Dosen::create([
            'nip' => '197202061997021001',
            'nama' => 'Nazaruddin, S.Si, M.Eng',
            'email' => 'anzaro@unsyiah.ac.id'
        ]);

        Dosen::create([
            'nip' => '197203181995121001',
            'nama' => 'Rahmad Dawood, S.Kom, M.Sc',
            'email' => 'rahmad.dawood@unsyiah.ac.id'
        ]);

        Dosen::create([
            'nip' => '197212261992011001',
            'nama' => 'Ardiansyah, BSEE.,M.Sc',
            'email' => 'ardiansyah@unsyiah.ac.id'
        ]);

        Dosen::create([
            'nip' => '198806032019031011',
            'nama' => 'Alim Misbullah, S.Si., M.S.',
            'email' => 'misbullah@unsyiah.ac.id'
        ]);

        Dosen::create([
            'nip' => '197705082003121003',
            'nama' => 'Muhd. Iqbal, S.Si, M.Kom',
            'email' => 'iqbal@unsyiah.ac.id'
        ]);

        Dosen::create([
            'nip' => '198003262014041001',
            'nama' => 'Kurnia Saputra, S.T., M.Sc.',
            'email' => 'kurnia.saputra@unsyiah.ac.id'
        ]);
    }
}
