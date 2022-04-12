@extends('Layout.user')
@section('title', "D'AsLab | Daftar Asisten")
@section('head', 'Pendaftaran Asisten Laboratorium')


@section('container')
    <!-- Main content -->
    <section class="content pb-5">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-4 ml-4">
                    <!-- start form pendaftaran -->
                    <form action="{{ url('/daftar') }}" method="post">
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @if ($errors->has('nama')) is-invalid @endif"
                                id="nama" name="nama" placeholder="Nama Lengkap">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $errors->first('nama') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="npm">NPM</label>
                            <input type="text" class="form-control" id="npm" name="npm" placeholder="NPM">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="noHP">No HP</label>
                            <input type="text" class="form-control" id="noHP" name="nohp" placeholder="Nomor HP">
                        </div>

                        <!-- jurusan -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jurusan</label>
                            <select class="form-control" name="jurusan" id="exampleFormControlSelect1">
                                <option value="Informatika">Informatika</option>
                                <option value="Matematika">Matematika</option>
                                <option value="Kimia">Kimia</option>
                                <option value="Fisika">Fisika</option>
                                <option value="Statistika">Statistika</option>
                            </select>
                        </div>
                        <!-- end jurusan -->

                        <!-- matakuliah -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Mata Kuliah</label>
                            <select class="form-control" name="mataKuliah" id="exampleFormControlSelect1">
                                <option value="Pemrograman Dasar">Pemrograman Dasar</option>
                                <option value="Pemrograman Berbasis WEB">Pemrograman Berbasis WEB</option>
                                <option value="Kimia">Kimia</option>
                                <option value="Fisika">Fisika</option>
                                <option value="Statistika">Statistika</option>
                            </select>

                        </div>
                        <!-- end matakuliah -->

                        <!-- button submit -->
                        <button type="submit" class="btn btn-success">Kirim</button>
                        <!-- end button submit -->
                    </form>
                    <!-- end form -->
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("Good job!", "You clicked the button!", "success");
        </script>
    @endif
@endsection
