<?php

namespace Database\Seeders;

use App\Models\KrsAccount;
use App\Models\SimpegAccount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KrsAccount::create([
            'nim_mhs' => '2008107010013',
            'password' => Hash::make('123'),
        ]);

        KrsAccount::create([
            'nim_mhs' => '2008107010020',
            'password' => Hash::make('123'),
        ]);

        KrsAccount::create([
            'nim_mhs' => '2008101010014',
            'password' => Hash::make('123'),
        ]);

        KrsAccount::create([
            'nim_mhs' => '2008103010049',
            'password' => Hash::make('123'),
        ]);

        KrsAccount::create([
            'nim_mhs' => '2008108010034',
            'password' => Hash::make('123'),
        ]);

        KrsAccount::create([
            'nim_mhs' => '2008109010012',
            'password' => Hash::make('123'),
        ]);

        KrsAccount::create([
            'nim_mhs' => '2008102010043',
            'password' => Hash::make('123'),
        ]);

        KrsAccount::create([
            'nim_mhs' => '2008104010084',
            'password' => Hash::make('123'),
        ]);

        SimpegAccount::create([
            'nip_dosen' => '198103152003121003',
            'password' => Hash::make('123'),
        ]);

        SimpegAccount::create([
            'nip_dosen' => '197808152010121002',
            'password' => Hash::make('123'),
        ]);

        SimpegAccount::create([
            'nip_dosen' => '198008312009122003',
            'password' => Hash::make('123'),
        ]);

        SimpegAccount::create([
            'nip_dosen' => '197202061997021001',
            'password' => Hash::make('123'),
        ]);

        SimpegAccount::create([
            'nip_dosen' => '197203181995121001',
            'password' => Hash::make('123'),
        ]);

        SimpegAccount::create([
            'nip_dosen' => '197212261992011001',
            'password' => Hash::make('123'),
        ]);

        SimpegAccount::create([
            'nip_dosen' => '198806032019031011',
            'password' => Hash::make('123'),
        ]);

        SimpegAccount::create([
            'nip_dosen' => '197705082003121003',
            'password' => Hash::make('123'),
        ]);

        SimpegAccount::create([
            'nip_dosen' => '198003262014041001',
            'password' => Hash::make('123'),
        ]);

        SimpegAccount::create([
            'nip_dosen' => '197002212000032002',
            'password' => Hash::make('123'),
        ]);
    }
}
