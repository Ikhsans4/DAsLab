@extends('main.layout.admin')
@section('title', "D'AsLab | Pendaftar")
@section('head', 'Data Mahasiswa yang Mendaftar Sebagai Asisten')
@section('link', 'Pendaftar')


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
                    @if($register['jurusan'] === auth()->user()->jurusan)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $register['nama'] }}</td>
                        <td>{{ $register['npm'] }}</td>
                        <td>{{ $register['email'] }}</td>
                        <td>{{ $register['jurusan'] }}</td>
                        <td>{{ $register['mataKuliah'] }}</td>
                        <td class="row justify-content-center">
                            @if ($register['status'] === null)
                                <a data-id="{{ $register->id }}"
                                    class="btn btn-sm btn-block bg-gradient-danger confirm-delete">Tolak
                                    <form action="{{ url('/admin/pendaftar') }}" id="delete{{ $register->id }}"
                                        method="POST" style="margin-right: 1rem;">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id" value="{{ $register['id'] }}">
                                    </form>
                                </a>
                                <a data-id="{{ $register->id }} "
                                    class="btn btn-sm btn-block bg-gradient-primary confirm-accept ">Terima
                                    <form action="{{ url('/admin/pendaftar/') }}" method="POST"
                                        id="accept{{ $register->id }}">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="id" value="{{ $register['id'] }}">
                                    </form>
                                </a>
                            @elseif ($register['status'] == 1)
                                <p class="btn btn-sm btn-block bg-gradient-success">Diterima</p>
                            @else
                                <p class="btn btn-sm btn-block bg-gradient-danger">Ditolak</p>
                            @endif
                        </td>
                    </tr>
                    @endif
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
