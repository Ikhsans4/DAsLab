@extends('main.layout.admin')

@section('title', "D'AsLab | Admin")
@section('head', 'Dashboard')
@section('active', 'active')
@section('link', 'Dashboard')

@section('container')

    <!-- Main content -->

    <section class="content" style="background-color: #272A37;">
        <!-- head -->
        <div class="row">

            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $jumlahAsisten }}<sup style="font-size: 20px"></sup></h3>

                        <p>Jumlah Asisten</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon fas fa-users"></i>
                    </div>
                    <a href="{{ url('/admin/asisten') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6 ">
                <!-- small box -->
                <div class="small-box bg-info">
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
        <section class="content text-dark " id=" list-mk" style="background-color: #272A37;">
            <div class="d-flex flex-wrap justify-content-center ">
                @foreach ($mata_kuliah as $mk)
                    <div class="card mx-2 p-2" style="width: 14rem;">
                        <img src="{{ url('img/matakuliah/tag.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> <b>{{ $mk['nama_mk'] }}</b> </h5>
                            <p class="card-text">
                                Dosen Pengampu : <br>{{ $mk['dosen_pengampu'] }}
                                <br>
                                Asisten : <br>

                                @php
                                    $i = 1;
                                    $status = 0;
                                @endphp
                                @foreach ($asisten as $aslab)
                                    @if ($aslab['mataKuliah'] === $mk['nama_mk'] && $aslab['status'] === 1)
                                        {{ $i }}. {{ $aslab['nama'] }}
                                        @php
                                            $i += 1;
                                            $status = 1;
                                        @endphp
                                    @endif
                                @endforeach
                                @if ($status !== 1)
                                    Tidak ada Asisten
                                @endif

                            </p>

                        </div>
                    </div>
                @endforeach
            </div>


        </section>
        <!-- /.content -->
    @endsection
