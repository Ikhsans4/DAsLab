@extends('Layout/main')

@section('title', 'Kelas')
@section('head', 'Mata Kuliah')

<!-- Main content -->
@section('container')



    <section class="content" id="list-mk" style="background-color: #272A37;">





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

    <script>
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                this.responseText;
                var parsing = JSON.parse(this.responseText)
                console.log(parsing[0]['mata_kuliah']);
            }
        };
        xhttp.open("GET", "http://localhost/PBW/dummy-api/public/api/matakuliah", true);
        xhttp.send();
    </script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{ url('js/api.js') }}"></script> --}}

@endsection
