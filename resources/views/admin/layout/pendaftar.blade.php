@extends('Layout/main')

@section('title', 'Data Pendaftar')
@section('head', 'Data Mahasiswa yang Mendaftar Sebagai Asisten')
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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>2008107010001</td>
                    <td>@mdo</td>
                    <td>Informatika</td>
                    <td>Pemrograman</td>
                    <td>
                        <button type="button" class="btn btn-danger">Tolak</button>
                        <button type="button" class="btn btn-primary">Terima</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Biologi</td>
                    <td>Pengantar Biologi</td>
                    <td>
                        <button type="button" class="btn btn-danger">Tolak</button>
                        <button type="button" class="btn btn-primary">Terima</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>Matematika</td>
                    <td>Pemrograman Dasar</td>
                    <td>
                        <button type="button" class="btn btn-danger">Tolak</button>
                        <button type="button" class="btn btn-primary">Terima</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- /.tabel -->
    @endsection
