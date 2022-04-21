@extends('Layout/main')

@section('title', "D'AsLab | Pendaftar")
@section('head', 'Data Mahasiswa yang Mendaftar Sebagai Asisten')
@section('active', 'active')


@section('container')

    <section class="content" style="background-color: #272A37;">
        <!-- tabel -->

        <table id="example1" class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Mata Kuliah</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($registers as $register)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $register['nama'] }}</td>
                        <td>{{ $register['npm'] }}</td>
                        <td>{{ $register['email'] }}</td>
                        <td>{{ $register['jurusan'] }}</td>
                        <td>{{ $register['mataKuliah'] }}</td>
                        <td class="row justify-content-center">
                            @if ($register['status'] === null)
                                <form action="{{ url('/admin/pendaftar/' . $register['id']) }}" method="POST"
                                    style="margin-right: 1rem;">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-block bg-gradient-danger"
                                        onclick="return confirm('Anda yakin?')">Tolak</button>
                                </form>
                                <form action="{{ url('/admin/pendaftar/' . $register['id']) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-sm btn-block bg-gradient-primary">Terima</button>
                                </form>
                            @elseif ($register['status'] == 1)
                                <p class="btn btn-sm btn-block bg-gradient-success">Diterima</p>
                            @else
                                <p class="btn btn-danger">Ditolak</p>
                            @endif
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

        <!-- /.tabel -->
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
                    "buttons": false,
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    @endsection
