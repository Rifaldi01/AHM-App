<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Lamaran;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.lamaran');
    }

    public function approve($id)
    {
        $lamaran = Lamaran::find($id);
        $pegawai = new Pegawai();
        $pegawai->nama_lengkap = $lamaran->nama_lengkap;
        $pegawai->jenis_kelamin = $lamaran->jenis_kelamin;
        $pegawai->alamat = $lamaran->alamat;
        $pegawai->no_hp = $lamaran->no_hp;
        $pegawai->email = $lamaran->email;
        $pegawai->jabatan_id = 2;
        $lamaran->status = "di terima";
        $lamaran->save();
        $pegawai->save();
        return redirect()->back()->with('success', 'Lamaran sudah di setujui');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $lamaran = Lamaran::all();
        return view('admin.lamaran.index', compact('lamaran'));
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
