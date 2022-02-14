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
@section('title','Daftar lamaran')
@section('page-title','Daftar lamaran')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="default-datatable" class="table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>CV</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lamaran as $no => $item)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->cv }} <a href="" class="badge badge-warning badge">
                                        <i class="fa fa-download"></i> </a></td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="javascript:void(0)" data-name="{{ $item->nama_lengkap }}"
                                        data-href="{{ route('delete-lamaran',$item->id) }}" data-id="{{ $item->id }}"
                                        class="btn btn-danger btn-sm waves-effect waves-light m-1 delete">
                                        <i class="fa fa-trash"></i> </a>
                                    @if ($item->status == "di proses")
                                    <a href="javascript:void(0)" data-name="{{ $item->nama_lengkap }}"
                                        data-href="{{ route('terima-lamaran',$item->id) }}" data-id="{{ $item->id }}"
                                        class="btn btn-success btn-sm waves-effect waves-light m-1 terima">
                                        <i class="fa fa-check"></i> Terima</a>
                                    @endif
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
    $('.terima').click(function (e) {
        e.preventDefault();
        var name = $(this).attr('data-name');
        var getId = $(this).attr('data-id');
        swal({
            title: "Apakah kamu yakin ?",
            text: "Kamu akan menerima pegawai baru "+name,
            icon: "info",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                window.location.href = $('.terima').attr('data-href');
            }
        });
    });

</script>
@endpush
<!-- End Row-->
@endsection
