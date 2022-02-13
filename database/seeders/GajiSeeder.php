<?php

namespace Database\Seeders;

use App\Models\Gaji;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gaji = Gaji::create([
            'pegawai_id'     => '1',
            'jumlah_gaji'    => '30000000',
            'tanggal'        => Carbon::now()->format('Y-m-d'),
        ]);
        $gaji = Gaji::create([
            'pegawai_id'     => '2',
            'jumlah_gaji'    => '30000000',
            'tanggal'        => Carbon::now()->format('Y-m-d'),
        ]);
    }
}
