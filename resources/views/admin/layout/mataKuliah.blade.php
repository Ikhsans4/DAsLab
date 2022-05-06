@extends('main.layout.admin')
@section('title', "D'AsLab | Mata Kuliah")
@section('head', 'Mata Kuliah')
@section('link', 'Mata Kuliah')

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
                    <th>Dosen Pengampu</th>
                    <th>Asisten</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($mata_kuliah as $mk)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $mk['kode_mk'] }}</td>
                        <td>{{ $mk['nama_mk'] }}</td>
                        <td>{{ $mk['sks'] }}</td>
                        <td>{{ $mk['semester'] }}</td>
                        <td>{{ $mk['jurusan'] }}</td>
                        <td>
                            @foreach ($lecturers as $lecturer)
                                @if ($mk['nip_dosen'] === $lecturer['nip'])
                                    {{ $lecturer['nama'] }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @php
                                $data = false;
                            @endphp
                            @foreach ($asisten as $aslab)
                                @if ($aslab->mataKuliah === $mk['nama_mk'] && $aslab->status === 1)
                                    {{ $aslab->nama }}
                                    @php
                                        $data = true;
                                    @endphp
                                @endif
                            @endforeach
                            @if ($data === false)
                                Tidak ada Asisten
                            @endif

                        </td>
                    </tr>
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
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": false,
            });
        });
    </script>
    <script>
        $('.confirm-delete').click(function(e) {
            id = e.target.dataset.id;
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, reject!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(`#delete${id}`).submit();
                }
            })
        });
    </script>
    <script>
        $('.confirm-accept').click(function(e) {
            id = e.target.dataset.id;
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#008000',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, accept!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(`#accept${id}`).submit();
                }
            })
        });
    </script>

    @if (session('accept'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Asisten Diterima!',
                showConfirmButton: false,
                timer: 1500,
                toast: true,
            })
        </script>
    @endif
    @if (session('reject'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Asisten Ditolak!',
                showConfirmButton: false,
                timer: 1500,
                toast: true,
            })
        </script>
    @endif
@endsection
