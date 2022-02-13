@extends('layouts.master')

@section('page-title','Edit data pegawai')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('update-pegawai',$pegawai->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="input-1">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" required class="form-control" id="input-1"
                            placeholder="Enter Your Name" value="{{ $pegawai->nama_lengkap }}">
                    </div>
                    <div class="form-group">
                        <label for="input-2">Jabatan</label>
                        <select class="form-control" required name="jabatan_id" id="basic-select">
                            <option disabled selected>Pilih jabatan</option>
                            @foreach ($jabatan as $item)
                            <option value="{{ $item->id }}" {{ ($item->id == $pegawai->jabatan_id) ? 'selected' : '' }}
                                >{{ $item->nama_jabatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-2">Jenis Kelamin</label>
                        <select class="form-control" required name="jenis_kelamin" id="basic-select">
                            <option disabled selected>Pilih Jenis Kelamin</option>
                            <option value="Laki Laki" @if ($pegawai->jenis_kelamin == "Laki Laki")
                                selected
                                @endif>Laki Laki</option>
                            <option value="Perempuan" @if ($pegawai->jenis_kelamin == "Perempuan")
                                selected
                                @endif>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-3">Email</label>
                        <input type="email" required name="email" value="{{ $pegawai->email }}" class="form-control"
                            id="input-3" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label for="input-3">No Hp</label>
                        <input type="number" required name="no_hp" value="{{ $pegawai->no_hp }}" class="form-control"
                            id="input-3" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label for="basic-textarea">
                            Alamat
                        </label>
                        <textarea name="alamat" rows="4" class="form-control" required>{{ $pegawai->alamat }}
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i>
                        Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
