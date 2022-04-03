@extends('Layout.user')
@section('title', 'About')
@section('head')


@section('container')
    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="text-center">
                <h3>ABOUT US</h3>
            </div>

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