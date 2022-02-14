<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::join('jabatans', 'jabatans.id', '=', 'pegawais.jabatan_id')
            ->select('jabatans.*', 'pegawais.*')
            ->get();
        $jabatan = Jabatan::all();
        return view('admin.pegawai.index', compact('pegawai', 'jabatan'));
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
        // dd($request->all());
        $request->validate(
            [
                'nama_lengkap'   => 'required',
                'jenis_kelamin'  => 'required',
                'no_hp'          => 'required|unique:pegawais,no_hp,',
                'email'          => 'required|unique:pegawais,email,',
                'alamat'        => 'required'
            ],
            [
                'nama_lengkap.required'     => 'Nama lengkap wajib di isi',
                'jenis_kelamin.required'    => 'Jenis Kelamin wajib di isi',
                'no_hp.required'            => 'No Hp wajib di isi',
                'alamat.required'            => 'Alamat Wajib di isi',
                'email.required'            => 'Email Wajib di isi',
                'email.unique'            => 'Email sudah di gunakan',
                'no_hp.unique'            => 'No hp sudah di gunakan',
            ]
        );
        $pegawai = Pegawai::create([
            'nama_lengkap' => $request->nama_lengkap,
            'jabatan_id'   => $request->jabatan_id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('daftar-pegawai')->with('success', 'Data berhasil di tambahkan');
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
        $pegawai = Pegawai::find($id);
        $jabatan = Jabatan::all();
        return view('admin.pegawai.edit', compact('pegawai', 'jabatan'));
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

        $request->validate(
            [
                'nama_lengkap'   => 'required',
                'jenis_kelamin'  => 'required',
                'no_hp'          => 'required|unique:pegawais,no_hp,' . $id,
                'email'          => 'required|unique:pegawais,email,' . $id,
                'alamat'        => 'required'
            ],
            [
                'nama_lengkap.required'     => 'Nama lengkap wajib di isi',
                'jenis_kelamin.required'    => 'Jenis Kelamin wajib di isi',
                'no_hp.required'            => 'No Hp wajib di isi',
                'alamat.required'            => 'Alamat Wajib di isi',
                'email.required'            => 'Email Wajib di isi',
                'email.unique'            => 'Email sudah di gunakan',
                'no_hp.unique'            => 'No hp sudah di gunakan',
            ]
        );
        $pegawai = Pegawai::find($id);
        $pegawai->update([
            'nama_lengkap' => $request->nama_lengkap,
            'jabatan_id'   => $request->jabatan_id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('daftar-pegawai')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect()->back()->with('success', 'Data berhasil di hapus');
    }
}
