@extends('layouts.master')

@section('page-title')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-plus"></i>
                Edit jabatan
            </div>
            <div class="card-body">
                <form action="{{ route('update-jabatan',$jabatan->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="input-1">Nama Jabatan</label>
                        <input type="text" name="nama_jabatan" required class="form-control" id="input-1"
                            placeholder="Enter Your Name" value="{{ $jabatan->nama_jabatan }}">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i>
                        Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
