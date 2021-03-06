@extends('main.layout.user')
@section('title', "D'AsLab | History")
@section('head', 'History')
@section('link', 'History')

<!-- Main content -->
@section('container')
    <section class="content" style="background-color: #272A37;">
        <!-- tabel -->
        <table id="example1" class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Jurusan</th>
                    <th>Asisten</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($asisten as $aslab)
                    @foreach ($lessons as $lesson)
                        @if ($aslab->mataKuliah === $lesson['nama_mk'] && $aslab->status === 1)
                            @if ($thisYear !== $aslab->created_at->format('Y') && $lesson['semester'] !== $semesterBerjalan)
                                @if ($lesson['nip_dosen'] === auth()->user()->npm)
                                    <tr>
                                        <td scope="row">{{ $i }}</td>
                                        <td scope="row">{{ $lesson['kode_mk'] }}</td>
                                        <td scope="row">{{ $lesson['nama_mk'] }}</td>
                                        <td scope="row">{{ $lesson['sks'] }}</td>
                                        <td scope="row">{{ $lesson['semester'] }}</td>
                                        <td scope="row">{{ $lesson['jurusan'] }}</td>
                                        <td scope="row">
                                            {{ $aslab->nama }}
                                        </td>
                                        <td scope="row">
                                            {{ $aslab->created_at->format('Y') }}
                                        </td>
                                    </tr>
                                    @php
                                        $i += 1;
                                    @endphp
                                @endif
                            @endif
                        @endif
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </section>
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
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "pdf", ]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
