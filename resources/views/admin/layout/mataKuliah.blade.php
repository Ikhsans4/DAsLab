@extends('Layout/main')

@section('title', 'Kelas')
@section('head', 'Mata Kuliah')

<!-- Main content -->
@section('container')

    <section class="content" style="background-color: #272A37;">
        <div class="text-right pe-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahdatamodal">
                Tambah Data
            </button>
        </div>
        <div class="container-fluid d-flex flex-wrap justify-content-center text-dark mt-3">
            <!-- card 1 -->
            <div class="card " style="width: 18rem; padding: 1rem; margin: 5px;">
                <img src="{{ url('img/matakuliah/python.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and
                        make up the
                        bulk of the card's content.</p>
                    <div class="d-flex justify-content-center">
                        <button href="#" class="btn btn-danger btn-sm" style="margin: 2px;">Delete</button>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#updatedatamodal" style="margin: 2px;">
                            update
                        </button>
                    </div>
                </div>
            </div>
            <!-- end card -->
            <!-- card 2 -->
            <div class=" card " style="width: 18rem; padding: 1rem; margin: 5px;">
                <img src="{{ url('img/matakuliah/tag.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and
                        make up the
                        bulk of the card's content.</p>
                    <div class="d-flex justify-content-center">
                        <button href="#" class="btn btn-danger btn-sm" style="margin: 2px;">Delete</button>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#updatedatamodal" style="margin: 2px;">
                            update
                        </button>
                    </div>
                </div>
            </div>
            <!-- end card -->
            <!-- card 3 -->
            <div class="card " style="width: 18rem; padding: 1rem; margin: 5px;">
                <img src="{{ url('img/matakuliah/python.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and
                        make up the
                        bulk of the card's content.</p>
                    <div class="d-flex justify-content-center">
                        <button href="#" class="btn btn-danger btn-sm" style="margin: 2px;">Delete</button>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#updatedatamodal" style="margin: 2px;">
                            update
                        </button>
                    </div>
                </div>
            </div>
            <!-- end card -->
            <!-- card 4 -->
            <div class="card " style="width: 18rem; padding: 1rem; margin: 5px;">
                <img src="{{ url('img/matakuliah/tag.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and
                        make up the
                        bulk of the card's content.</p>
                    <div class="d-flex justify-content-center">
                        <button href="#" class="btn btn-danger btn-sm" style="margin: 2px;">Delete</button>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#updatedatamodal" style="margin: 2px;">
                            update
                        </button>
                    </div>
                </div>
            </div>
            <!-- end card -->
            <!-- card 5 -->
            <div class="card " style="width: 18rem; padding: 1rem; margin: 5px;">
                <img src="{{ url('img/matakuliah/python.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and
                        make up the
                        bulk of the card's content.</p>
                    <div class="d-flex justify-content-center">
                        <button href="#" class="btn btn-danger btn-sm" style="margin: 2px;">Delete</button>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#updatedatamodal" style="margin: 2px;">
                            update
                        </button>
                    </div>
                </div>
            </div>
            <!-- end card -->
            <!-- card 6 -->
            <div class="card " style="width: 18rem; padding: 1rem; margin: 5px;">
                <img src="{{ url('img/matakuliah/tag.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and
                        make up the
                        bulk of the card's content.</p>
                    <div class="d-flex justify-content-center">
                        <button href="#" class="btn btn-danger btn-sm" style="margin: 2px;">Delete</button>
                        <button href="#" class="btn btn-primary btn-sm" style="margin: 2px;">Update</button>
                    </div>
                </div>
            </div>
            <!-- end card -->
            <!-- card 7 -->
            <div class="card " style="width: 18rem; padding: 1rem; margin: 5px;">
                <img src="{{ url('img/matakuliah/python.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and
                        make up the
                        bulk of the card's content.</p>
                    <div class="d-flex justify-content-center">
                        <button href="#" class="btn btn-danger btn-sm" style="margin: 2px;">Delete</button>
                        <button href="#" class="btn btn-primary btn-sm" style="margin: 2px;">Update</button>
                    </div>
                </div>
            </div>
            <!-- end card -->

        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade text-dark" id="tambahdatamodal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mata Kuliah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td> <label for="matakuliah">Mata Kuliah</label> </td>
                                <td><label for="matakuliah" style="padding: 1rem 2rem;"> : </label></td>
                                <td> <select class="form-control" id="matakuliah">
                                        <option>Pemrograman Dasar</option>
                                        <option>Pemrograman Berbasis WEB</option>
                                        <option>Kimia</option>
                                        <option>Fisika</option>
                                        <option>Statistika</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td> <label for="jurusan">Jurusan</label> </td>
                                <td><label for="jurusan" style="padding: 1rem 2rem;"> : </label></td>
                                <td> <select class="form-control" id="jurusan">
                                        <option>Informatika</option>
                                        <option>Matematika</option>
                                        <option>Kimia</option>
                                        <option>Fisika</option>
                                        <option>Statistika</option>
                                    </select> </td>
                            </tr>
                            <tr>
                                <td><label for="dosenpengampu">Dosen Pengampu</label></td>
                                <td><label for="dosenpengampu" style="padding: 1rem 2rem;"> : </label></td>
                                <td><input type="text" class="form-control" id="dosenpengampu"
                                        placeholder="Dosen Pengampu"></td>
                            </tr>
                            <tr>
                                <td><label for="nohp">Nomor HP</label></td>
                                <td><label for="nohp" style="padding: 1rem 2rem;"> : </label></td>
                                <td><input type="text" class="form-control" id="nohp" placeholder="Nomor HP"></td>
                            </tr>
                            <tr>
                                <td><label for="asisten1">Asisten 1</label></td>
                                <td><label for="asisten1" style="padding: 1rem 2rem;"> : </label></td>
                                <td><input type="text" class="form-control" id="asisten1" placeholder="Asisten 1"></td>
                            </tr>
                            <tr>
                                <td><label for="asisten2">Asisten 2</label></td>
                                <td><label for="asisten2" style="padding: 1rem 2rem;"> : </label></td>
                                <td><input type="text" class="form-control" id="asisten2" placeholder="Asisten 2"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal update data-->
    <div class="modal fade text-dark" id="updatedatamodal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data Mata Kuliah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td> <label for="matakuliah">Mata Kuliah</label> </td>
                                <td><label for="matakuliah" style="padding: 1rem 2rem;"> : </label></td>
                                <td> <select class="form-control" id="matakuliah">
                                        <option>Pemrograman Dasar</option>
                                        <option>Pemrograman Berbasis WEB</option>
                                        <option>Kimia</option>
                                        <option>Fisika</option>
                                        <option>Statistika</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td> <label for="jurusan">Jurusan</label> </td>
                                <td><label for="jurusan" style="padding: 1rem 2rem;"> : </label></td>
                                <td> <select class="form-control" id="jurusan">
                                        <option>Informatika</option>
                                        <option>Matematika</option>
                                        <option>Kimia</option>
                                        <option>Fisika</option>
                                        <option>Statistika</option>
                                    </select> </td>
                            </tr>
                            <tr>
                                <td><label for="dosenpengampu">Dosen Pengampu</label></td>
                                <td><label for="dosenpengampu" style="padding: 1rem 2rem;"> : </label></td>
                                <td><input type="text" class="form-control" id="dosenpengampu"
                                        placeholder="Dosen Pengampu"></td>
                            </tr>
                            <tr>
                                <td><label for="nohp">Nomor HP</label></td>
                                <td><label for="nohp" style="padding: 1rem 2rem;"> : </label></td>
                                <td><input type="text" class="form-control" id="nohp" placeholder="Nomor HP"></td>
                            </tr>
                            <tr>
                                <td><label for="asisten1">Asisten 1</label></td>
                                <td><label for="asisten1" style="padding: 1rem 2rem;"> : </label></td>
                                <td><input type="text" class="form-control" id="asisten1" placeholder="Asisten 1"></td>
                            </tr>
                            <tr>
                                <td><label for="asisten2">Asisten 2</label></td>
                                <td><label for="asisten2" style="padding: 1rem 2rem;"> : </label></td>
                                <td><input type="text" class="form-control" id="asisten2" placeholder="Asisten 2"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>

@endsection
