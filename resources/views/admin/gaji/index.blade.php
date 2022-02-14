@extends('layouts.master')
@push('css')
<!--Data Tables -->
<link href="{{ asset('assets-2/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ asset('assets-2/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css" rel="stylesheet"
    type="text/css">
<link href="{{ asset('assets-2/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
@endpush
@section('title','Daftar gaji pegawai')
@section('page-title','Daftar gaji pegawai')
@section('content')
@if($errors->any())
<div class="row">
    <div class="col-lg-6">
        <div class="alert alert-icon-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <div class="alert-icon icon-part-danger">
                <i class="icon-check"></i>
            </div>
            <div class="alert-message">
                <span><strong>Kesalahan</strong></span>
            </div>
        </div>
    </div>
</div>
@endif
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="default-datatable" class="table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Jabatan</th>
                                <th>Jumlah Gaji</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gaji as $no => $data)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $data->nama_lengkap }}</td>
                                <td>{{ $data->nama_jabatan }}</td>
                                <td>{{ $data->jumlah_gaji }}</td>
                                <td>{{ $data->tanggal }}</td>
                                <td>
                                    <a href="javascript:void(0);" data-name="{{ $data->nama_lengkap }}"
                                        data-href="{{ route('delete-pegawai',$data->gaji_id) }}"
                                        data-id="{{ $data->gaji_id }}"
                                        class="btn btn-danger btn-sm waves-effect waves-light m-1 delete">
                                        <i class="fa fa-trash"></i> </a>
                                    <a href="{{ route('edit-pegawai',$data->gaji_id) }}"
                                        class="btn btn-info btn-sm waves-effect waves-light m-1">
                                        <i class="fa fa-edit"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-plus"></i>
                Gaji pegawai
            </div>
            <div class="card-body">
                <form action="{{ route('store-gaji') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="input-1">Nama pegawai</label>
                        <select class="form-control single-select" name="pegawai_id">
                            <option disabled selected> Pilih Pegawai</option>
                            @foreach ($pegawai as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_lengkap }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-1">Jumlah gaji</label>
                        <input type="text" name="jumlah_gaji" required class="form-control uang @error('jumlah_gaji')
                        is-invalid
                        @enderror" id="input-1" placeholder="Enter Your Name">
                        @error('jumlah_gaji')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i>
                        Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@push('js')
<!--Select Plugins Js-->
<script src="{{ asset('assets-2/plugins/select2/js/select2.min.js') }}"></script>
<!--Data Tables js-->
<script src="{{ asset('assets-2/plugins/bootstrap-datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets-2/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets-2/plugins/bootstrap-datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets-2/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets-2/plugins/bootstrap-datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('assets-2/plugins/bootstrap-datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets-2/plugins/bootstrap-datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets-2/plugins/bootstrap-datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets-2/plugins/bootstrap-datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets-2/plugins/bootstrap-datatable/js/buttons.colVis.min.js') }}"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('assets-2/js/jquery.mask.js') }}"></script>
@if (Session::has('success'))
<script>
    swal("Berhasil", "{{ Session::get('success') }},", "success");
</script>
@endif
<script>
    $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable({
        //    responsive: true
       });

       $('.uang').mask('000.000.000', {reverse: true});

       $('.single-select').select2();

       $('.multiple-select').select2();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );

     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );

    });

    $('.delete').click(function (e) {
        e.preventDefault();
        var name = $(this).attr('data-name');
        var getId = $(this).attr('data-id');
        swal({
            title: "Apakah kamu yakin ?",
            text: "Kamu akan menghapus data "+name,
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                window.location.href = $('.delete').attr('data-href');
            }
        });
    });
</script>
<script src="https://unpkg.com/imask"></script>

@endpush
<!-- End Row-->
@endsection
