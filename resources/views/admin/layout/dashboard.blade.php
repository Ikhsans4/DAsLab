@extends('layout/main')

@section('title', 'Dashboard')
@section('head', 'Dashboard')
@section('active', 'active')

@section('container')

    <!-- Main content -->

    <section class="content" style="background-color: #272A37;">
        <!-- head -->
        <div class="row">
            <!-- total user -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Total User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- end total user -->
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $asisten }}<sup style="font-size: 20px"></sup></h3>

                        <p>Jumlah Asisten</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ url('/admin/asisten') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $pendaftar }}</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ url('admin/pendaftar') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
        <!-- end head -->
        <section class="content text-dark">
            <div class="container-fluid d-flex ">
                <!-- card 1 -->
                <div class="card" style="width: 18rem; padding: 1rem; margin: 5px;">
                    <img src="{{ url('img/matakuliah/python.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and
                            make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="card" style="width: 18rem; padding: 1rem; margin: 5px;">
                    <img src="{{ url('img/matakuliah/tag.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and
                            make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- card 3-->
                <div class="card" style="width: 18rem; padding: 1rem; margin: 5px;">
                    <img src="{{ url('img/matakuliah/python.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and
                            make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- card 4 -->
                <div class="card" style="width: 18rem; padding: 1rem; margin: 5px;">
                    <img src="{{ url('img/matakuliah/tag.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and
                            make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- card 5 -->
                <div class="card" style="width: 18rem; padding: 1rem; margin: 5px;">
                    <img src="{{ url('img/matakuliah/python.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and
                            make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- end card 5 -->

        </section>
        <!-- /.content -->
    @endsection
