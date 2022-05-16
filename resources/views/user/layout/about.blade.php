@extends('main.layout.user')
@section('title', "D'AsLab | About")
@section('head')


@section('container')
<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <div class="container text-center bg-optional px-4 py-3 rounded" style="width: 70rem;">
            <h3 class="mt-2 mb-4"><strong>ABOUT US</strong></h3>
            <h5>
                D'AsLab adalah aplikasi berbasis web yang membantu memudahkan proses pendaftaran asisten laboratorium. 
                Aplikasi ini juga membantu dosen untuk melihat daftar mahasiswa baik yang pernah menjadi asisten laboratorium maupun yang sedang menjadi asisten laboratorium di matakuliah yang diampunya.
            </h5>
        </div>
        <!-- End isi About Us -->
        <!-- End container fluid -->
    </div>
</section>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('status'))
<script>
    swal("Good job!", "You clicked the button!", "success");
</script>
@endif
@endsection