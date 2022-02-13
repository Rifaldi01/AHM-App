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
@section('title','Daftar jabatan')
@section('page-title','Daftar jabatan')
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-table"></i> Daftar jabatan
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="default-datatable" class="table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jabatan as $no => $item)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $item->nama_jabatan }}</td>
                                <td>
                                    <a href="{{ route('delete-jabatan',$item->id) }}"
                                        class="btn btn-danger btn-sm waves-effect waves-light m-1">
                                        <i class="fa fa-trash"></i> </a>
                                    <a href="{{ route('edit-jabatan',$item->id) }}"
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
                Tambah jabatan
            </div>
            <div class="card-body">
                <form action="{{ route('store-jabatan') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="input-1">Nama Jabatan</label>
                        <input type="text" name="nama_jabatan" required class="form-control" id="input-1"
                            placeholder="Enter Your Name">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i>
                        Simpan</button>
                </form>
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

      } );

</script>
@endpush
<!-- End Row-->
@endsection
