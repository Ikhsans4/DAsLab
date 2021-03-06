@extends('main.layout.admin')
@section('title', 'Tambah Asisten')
@section('head', 'Tambah Asisten Laboratorium')
@section('link', 'Tambah Asisten')

@section('container')
    <!-- Main content -->
    <section class="content pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 ml-4">
                    <!-- start form tambah data -->
                    <form action="{{ url('/admin/tambah') }}" method="post">
                        @csrf
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
                            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor HP">
                        </div>
                        <!-- jurusan -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jurusan</label>
                            <select class="form-control" name="jurusan" id="exampleFormControlSelect1">
                                @php
                                    $temp = null;
                                @endphp
                                @foreach ($lessons as $lesson)
                                    @if ($temp !== $lesson['jurusan'])
                                        <option value="{{ $lesson['jurusan'] }}">{{ $lesson['jurusan'] }}</option>
                                    @endif
                                    @php
                                        $temp = $lesson['jurusan'];
                                    @endphp
                                @endforeach
                            </select>
                        </div>
                        <!-- end jurusan -->

                        <!-- matakuliah -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Mata Kuliah</label>
                            <select class="form-control" name="mataKuliah" id="exampleFormControlSelect1">
                                @foreach ($lessons as $lesson)
                                    <option value="{{ $lesson['nama_mk'] }}">{{ $lesson['nama_mk'] }}</option>
                                @endforeach
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
@endsection