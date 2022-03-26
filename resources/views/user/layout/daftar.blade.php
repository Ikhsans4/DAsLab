@extends('Layout.user')
@section('title', 'Pendaftaran Asisten')


@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- start form pendaftaran -->
            <form>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" class="form-control" id="npm" placeholder="NPM">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="noHP">No HP</label>
                    <input type="text" class="form-control" id="noHP" placeholder="Nomor HP">
                </div>
                <!-- jurusan -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jurusan</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Informatika</option>
                        <option>Matematika</option>
                        <option>Kimia</option>
                        <option>Fisika</option>
                        <option>Statistika</option>
                    </select>
                </div>
                <!-- end jurusan -->
                <!-- matakuliah -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jurusan</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Pemrograman Dasar</option>
                        <option>Pemrograman Berbasis WEB</option>
                        <option>Kimia</option>
                        <option>Fisika</option>
                        <option>Statistika</option>
                    </select>
                </div>
                <!-- end matakuliah -->

                <!-- button submit -->
                <button type="button" class="btn btn-success">Kirim</button>
                <!-- end button submit -->


            </form>
            <!-- end form -->

        </div><!-- /.container-fluid -->
    </section>
@endsection
