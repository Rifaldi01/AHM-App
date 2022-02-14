<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gaji;
use App\Models\Pegawai;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gaji = Gaji::join('pegawais', 'pegawais.id', '=', 'gajis.pegawai_id')
            ->join('jabatans', 'jabatans.id', '=', 'pegawais.jabatan_id')
            ->select('pegawais.*', 'gajis.*', 'jabatans.*', 'gajis.id as gaji_id')
            ->get();
        // dd($gaji);
        $pegawai = Pegawai::all();
        return view('admin.gaji.index', compact('gaji', 'pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanggalSekarang = Carbon::now()->format('Y-m-d');
        $validated = $request->validate(
            [
                'jumlah_gaji' => 'required',
                'tanggal'     => 'after:date'
            ],
            [
                'jumlah_gaji.required' => 'Nama jabatan wajib di isi',
                'nama_jabatan.unique' => 'Nama jabatan sudah di pakai',
            ]
        );
        // remove dot
        $nominal = str_replace('.', '', $request->jumlah_gaji);
        $gaji = new Gaji();
        $gaji->pegawai_id = $request->pegawai_id;
        $gaji->jumlah_gaji = $nominal;
        $gaji->tanggal = $tanggalSekarang;
        $gaji->save();
        return redirect()->back()->with('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
