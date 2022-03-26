@extends('Layout.user')
@section('title', 'Pendaftaran Asisten')
@section('head', 'Pendaftaran Asisten Laboratorium')


@section('container')
    <!-- Main content -->
    <section class="content pb-5">
        <div class="container-fluid">
            <!-- start form pendaftaran -->
            <form>

                <table>
                    <tr>
                        <div class="form-group">

                            <td>
                                <label for="nama">Nama</label>
                            </td>
                            <td><label for="" style="padding: 1rem 2rem;"> : </label></td>
                            <td>
                                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td><label for="npm">NPM</label></td>
                            <td><label for="" style="padding: 1rem 2rem;"> : </label></td>
                            <td><input type="text" class="form-control" id="npm" placeholder="NPM"></td>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td> <label for="email">Email</label> </td>
                            <td><label for="" style="padding: 1rem 2rem;"> : </label></td>
                            <td> <input type="email" class="form-control" id="email" placeholder="Email"> </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td> <label for="noHP">No HP</label> </td>
                            <td><label for="" style="padding: 1rem 2rem;"> : </label></td>
                            <td> <input type="text" class="form-control" id="noHP" placeholder="Nomor HP"> </td>
                        </div>
                    </tr>
                    <!-- jurusan -->
                    <div class="form-group">
                        <td> <label for="exampleFormControlSelect1">Jurusan</label> </td>
                        <td><label for="" style="padding: 1rem 2rem;"> : </label></td>
                        <td> <select class="form-control" id="exampleFormControlSelect1">
                                <option>Informatika</option>
                                <option>Matematika</option>
                                <option>Kimia</option>
                                <option>Fisika</option>
                                <option>Statistika</option>
                            </select> </td>
                    </div>
                    <!-- end jurusan -->

                    <tr>
                        <!-- matakuliah -->
                        <div class="form-group">
                            <td> <label for="exampleFormControlSelect1">Jurusan</label> </td>
                            <td><label for="" style="padding: 1rem 2rem;"> : </label></td>
                            <td> <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Pemrograman Dasar</option>
                                    <option>Pemrograman Berbasis WEB</option>
                                    <option>Kimia</option>
                                    <option>Fisika</option>
                                    <option>Statistika</option>
                                </select>
                            </td>
                        </div>
                        <!-- end matakuliah -->
                    </tr>







                </table>




                <!-- button submit -->
                <button type="button" class="btn btn-success">Kirim</button>
                <!-- end button submit -->


            </form>
            <!-- end form -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
