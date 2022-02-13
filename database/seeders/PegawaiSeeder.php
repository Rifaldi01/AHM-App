<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pegawai1 = Pegawai::create([
            'nama_lengkap'      => 'Arya maulana yusuf',
            'jabatan_id'        => '1',
            'jenis_kelamin'     => 'Laki Laki',
            'alamat'            => 'Bojong Tanjung',
            'no_hp'             => '0832131413',
            'email'             => 'arya@gmail.com',
        ]);
        $pegawai2 = Pegawai::create([
            'nama_lengkap'      => 'Rifaldi',
            'jabatan_id'        => '1',
            'jenis_kelamin'     => 'Laki Laki',
            'alamat'            => 'Citereup',
            'no_hp'             => '083213123413',
            'email'             => 'rifaldi@gmail.com',
        ]);
    }
}
