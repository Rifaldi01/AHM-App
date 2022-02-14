<?php

namespace Database\Seeders;

use App\Models\Lamaran;
use Illuminate\Database\Seeder;

class LamaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lamaran = Lamaran::create([
            'nama_lengkap'  => 'saeful barkah',
            'email'         => 'saefulbarkah620@gmail.com',
            'jenis_kelamin' => 'laki laki',
            'cv'       => 'word.docx',
            'no_hp'         => '083180012053',
            'alamat'        => 'Bojong sukamukti',
            'status'        => 'di proses',
        ]);
    }
}
