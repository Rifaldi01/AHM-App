@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header"><i class="fa fa-table"></i> Data Table Example</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="default-datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1920.10.01</td>
                                <td>Goblin</td>
                                <td>RPL</td>
                                <td>2</td>
                                <td>
                                    <button class="btn btn-info"><i class="fa fa-pencil " style="font-size: 18px"></i>
                                    </button>
                                    <button onclick="Delete()" class="btn btn-danger"><i class="fa fa-trash"
                                                                                         style="font-size: 18px"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1920.10.01</td>
                                <td>Goblin</td>
                                <td>RPL</td>
                                <td>2</td>
                                <td>
                                    <button class="btn btn-info"><i class="fa fa-pencil " style="font-size: 18px"></i>
                                    </button>
                                    <button onclick="Delete()" class="btn btn-danger"><i class="fa fa-trash"
                                                                                         style="font-size: 18px"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1920.10.01</td>
                                <td>Goblin</td>
                                <td>RPL</td>
                                <td>2</td>
                                <td>
                                    <button class="btn btn-info"><i class="fa fa-pencil " style="font-size: 18px"></i>
                                    </button>
                                    <button onclick="Delete()" class="btn btn-danger"><i class="fa fa-trash"
                                                                                         style="font-size: 18px"></i>
                                    </button>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">

                    <i class="icon-user-follow icon" style="color: #00aff0"></i> Tambah Siswa
                    <div class="float-right">
                        <button type="submit" onclick="add()" class="btn gradient-meridian btn-sm">Tambah Kelas</button>
                    </div>
                </div>


                <div class="card-body">
                    <form>
                        @csrf
                        <label>Input NIS</label>
                        <input type="text" name="nis" class="form-control">
                        <label>Input Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control">
                        <div class="form-group">
                            <label>Input Jurusan</label>

                            <select class="form-control single-select">
                                <option value="rpl">RPL</option>
                                <option value="mm">Multimedia</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Input Kelas</label>
                            <select class="form-control multiple-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <br>
                        <div class="float-right">
                            <button type="submit" class="btn gradient-meridian">Kirim</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>


    </div>

@endsection

@section('js')

    <script src="{{URL::to('assets-2/plugins/bootstrap-datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::to('assets-2/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{URL::to('assets-2/plugins/bootstrap-datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::to('assets-2/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::to('assets-2/plugins/bootstrap-datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::to('assets-2/plugins/bootstrap-datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::to('assets-2/plugins/bootstrap-datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::to('assets-2/plugins/bootstrap-datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::to('assets-2/plugins/bootstrap-datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::to('assets-2/plugins/bootstrap-datatable/js/buttons.colVis.min.js')}}"></script>



    <script src="{{URL::to('assets-2/plugins/jquery-multi-select/jquery.multi-select.js')}}"></script>
    <script src="{{URL::to('assets-2/plugins/jquery-multi-select/jquery.quicksearch.js')}}"></script>
    <script src="{{URL::to('assets-2/plugins/select2/js/select2.min.js')}}"></script>


    <script>
        function add() {
            $('#tol').modal('show')
        }
    </script>
    <script>
        $(document).ready(function () {
            $('.single-select').select2();

            $('.multiple-select').select2();

            //multiselect start
        });
    </script>


@endsection


@section('head')
    <link href="{{URL::to('assets-2/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{URL::to('assets-2/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{URL::to('assets-2/plugins/select2/css/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::to('assets-2/plugins/jquery-multi-select/multi-select.css')}}" rel="stylesheet" type="text/css">

@endsection

<div class="modal fade" id="tol">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-star"></i> Tambah Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3">
                            <label>Input Jurusan</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="jurusan" class="form-control mb-2">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-3"><label>Input Kelas</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control mb-2">
                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
