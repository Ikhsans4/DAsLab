@extends('Layout/main')

@section('title', "D'AsLab | Pendaftar")
@section('head', 'Data Mahasiswa yang Mendaftar Sebagai Asisten')
@section('active', 'active')
@section('user', $data['image'])
@section('username', $data['username'])


@section('container')

    <section class="content" style="background-color: #272A37;">
        <!-- tabel -->

        <table class="table table-striped table-dark">
            <thead class="text-center">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Aksi</th>
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
                        <td class="row justify-content-center">
                            <form action="{{ url('/admin/pendaftar/' . $register['id']) }}" method="POST"
                                style="margin-right: 1rem;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Tolak</button>
                            </form>
                            <form action="{{ url('/admin/pendaftar/' . $register['id']) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary">Terima</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

        <!-- /.tabel -->
    @endsection
