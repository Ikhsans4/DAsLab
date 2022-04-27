@extends('main/layout.admin')

@section('title', "D'AsLab | Asisten Laboratorium")
@section('head', 'Daftar Asisten Laboratorium')
@section('active', 'active')
@section('link', 'Asisten')

@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="ms-4 mb-2"><button type="button" class="btn btn-info bg-gradient-info">Tambah
                        Asisten</button></div>
                <div class="col-12">
                    <div class="card" style="background-color: #38393e;">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>NPM</th>
                                        <th>Email</th>
                                        <th>Jurusan</th>
                                        <th>Mata Kuliah</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($registers as $register)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $register['nama'] }}</td>
                                            <td>{{ $register['npm'] }} </td>
                                            <td>{{ $register['email'] }}</td>
                                            <td>{{ $register['jurusan'] }}</td>
                                            <td>{{ $register['mataKuliah'] }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->
@endsection

@section('table')

    <!-- DataTables  & Plugins -->
    <script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ url('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ url('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
