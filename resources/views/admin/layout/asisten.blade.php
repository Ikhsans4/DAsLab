@extends('Layout/main')

@section('title', "D'AsLab | Asisten")
@section('head', 'Asisten Laboratorium')

<!-- Main content -->
@section('container')



    <section class="content" style="background-color: #272A37;">
        <!-- tabel -->
        <div class="text-right pe-4">
            <!-- Button trigger modal -->
            <a href="{{ url('/admin/tambah') }}" class="btn btn-success">
                Tambah Data
            </a>
        </div>

        <table class="table table-striped table-dark">
            <thead class="text-center">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Mata Kuliah</th>
                </tr>
            </thead>

            <tbody class="text-center">
                @foreach ($registers as $register)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $register['nama'] }}</td>
                        <td>{{ $register['npm'] }}</td>
                        <td>{{ $register['email'] }}</td>
                        <td>{{ $register['jurusan'] }}</td>
                        <td>{{ $register['mataKuliah'] }}</td>

                    </tr>
                @endforeach

            </tbody>

        </table>

        <!-- /.tabel -->
        <!-- notif -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @if (session('status'))
            <script>
                swal("Good job!", "You clicked the button!", "success");
            </script>
        @endif
        <!-- end notif -->
    @endsection
