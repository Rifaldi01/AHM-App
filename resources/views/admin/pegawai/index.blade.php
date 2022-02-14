@extends('layouts.master')
@push('css')
<!--Data Tables -->
<link href="{{ asset('assets-2/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ asset('assets-2/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css" rel="stylesheet"
    type="text/css">
@endpush
@section('title','Daftar pegawai')
@section('page-title','Daftar pegawai')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                    data-target="#defaultsizemodal"> <i class="fa fa-plus"></i>
                    Pegawai baru
                </button>
                <div class="modal fade" id="defaultsizemodal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><i class="fa fa-plus"></i> Pegawai baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('store-pegawai') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="input-1">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" required class="form-control"
                                            id="input-1" placeholder="Enter Your Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-2">Jabatan</label>
                                        <select class="form-control" required name="jabatan_id" id="basic-select">
                                            <option disabled selected>Pilih jabatan</option>
                                            @foreach ($jabatan as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-2">Jenis Kelamin</label>
                                        <select class="form-control" required name="jenis_kelamin" id="basic-select">
                                            <option disabled selected>Pilih Jenis Kelamin</option>
                                            <option value="Laki Laki">Laki Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">Email</label>
                                        <input type="email" required name="email" class="form-control" id="input-3"
                                            placeholder="Enter Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-3">No Hp</label>
                                        <input type="number" required name="no_hp" class="form-control" id="input-3"
                                            placeholder="Enter Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="basic-textarea">
                                            Alamat
                                        </label>
                                        <textarea name="alamat" rows="4" class="form-control" required></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                                class="fa fa-times"></i> Tutup</button>
                                        <button type="submit" class="btn btn-primary"><i
                                                class="fa fa-check-square-o"></i> Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="default-datatable" class="table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Jabatan</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Nomor HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $no => $data)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $data->nama_lengkap }}</td>
                                <td>{{ $data->nama_jabatan }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->no_hp }}</td>
                                <td>
                                    <a href="javascript:void(0);" data-name="{{ $data->nama_lengkap }}"
                                        data-href="{{ route('delete-pegawai',$data->id) }}" data-id="{{ $data->id }}"
                                        class="btn btn-danger btn-sm waves-effect waves-light m-1 delete">
                                        <i class="fa fa-trash"></i> </a>
                                    <a href="{{ route('edit-pegawai',$data->id) }}"
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
</div>
@push('js')
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
@if (Session::has('success'))
<script>
    swal("Berhasil", "{{ Session::get('success') }},", "success");
</script>
@endif
<script>
    $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable({
       });


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );

     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );

    });

    $('.delete').click(function (e) {
        e.preventDefault();
        var name = $('.delete').attr('data-name');
        var getId = $('.delete').attr('data-id');
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
@endpush
<!-- End Row-->
@endsection
