<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProgramStudi;
use DateTime;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create ProgramStudi
        ProgramStudi::create([
            'id_prodi' => 'PRD001',
            'nama_prodi' => 'ITC',
            'jenjang_prodi' => 'EKSKUL',
            'foto_prodi' => 'logo-eskul\itclub.png',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_prodi' => 'PRD002',
            'nama_prodi' => 'OSIS',
            'jenjang_prodi' => 'ORGANISASI',
            'foto_prodi' => 'logo-eskul\osis.png',
            'created_at' => now()
        ]);
        ProgramStudi::create([
            'id_prodi' => 'PRD003',
            'nama_prodi' => 'PASKIB',
            'jenjang_prodi' => 'ORGANISASI',
            'foto_prodi' => 'logo-eskul\paskibra.png',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_prodi' => 'PRD004',
            'nama_prodi' => 'KIR',
            'jenjang_prodi' => 'EKSKUL',
            'foto_prodi' => 'logo-eskul\kir.png',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_prodi' => 'PRD005',
            'nama_prodi' => 'volly',
            'jenjang_prodi' => 'EKSKUL',
            'foto_prodi' => 'logo-eskul\volly.png',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_prodi' => 'PRD006',
            'nama_prodi' => 'volly',
            'jenjang_prodi' => 'EKSKUL',
            'foto_prodi' => 'logo-eskul\volly.png',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_prodi' => 'PRD007',
            'nama_prodi' => 'volly',
            'jenjang_prodi' => 'EKSKUL',
            'foto_prodi' => 'logo-eskul\volly.png',
            'created_at' => now()
        ]);

    }
}
