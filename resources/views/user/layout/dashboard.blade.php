@extends('Layout.user')


@section('title', "D'AsLab | Dashboard")
@section('head', 'Dashboard')



@section('container')
    <!-- Main content -->
    <section class="content text-dark">
        <div class="container-fluid d-flex flex-wrap justify-content-center">
            <!-- card 1 -->
            <div class="card" style="width: 18rem; padding: 1rem; margin: 5px;">
                <img src="{{ url('img/matakuliah/python.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk of the card's content.</p>
                </div>
            </div>
            <!-- card 2 -->
            <div class="card" style="width: 18rem; padding: 1rem; margin: 5px;">
                <img src="{{ url('img/matakuliah/tag.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk of the card's content.</p>
                </div>
            </div>
            <!-- card 3-->
            <div class="card" style="width: 18rem; padding: 1rem; margin: 5px;">
                <img src="{{ url('img/matakuliah/python.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk of the card's content.</p>
                </div>
            </div>
            <!-- card 4 -->
            <div class="card" style="width: 18rem; padding: 1rem; margin: 5px;">
                <img src="{{ url('img/matakuliah/tag.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk of the card's content.</p>
                </div>
            </div>
            <!-- card 5 -->
            <div class="card" style="width: 18rem; padding: 1rem; margin: 5px;">
                <img src="{{ url('img/matakuliah/python.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk of the card's content.</p>
                </div>
            </div>
            <!-- end card 5 -->
            <!-- card 6 -->
            <div class="card" style="width: 18rem; padding: 1rem; margin: 5px;">
                <img src="{{ url('img/matakuliah/tag.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk of the card's content.</p>
                </div>
            </div>
            <!-- card 6 -->

        </div><!-- /.container-fluid -->
    </section>
@endsection
