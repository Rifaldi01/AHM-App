<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programmer = Jabatan::create([
            'nama_jabatan' => 'Programmer',
        ]);
        $Teknisi = Jabatan::create([
            'nama_jabatan' => 'Teknisi',
        ]);
    }
}
