@extends('main.layout.admin')

@section('title', "D'AsLab | Admin")
@section('head', 'Dashboard')
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
                @php
                    $j = 1;
                @endphp
                @foreach ($mata_kuliah as $mk)
                    <div class="card mx-2"
                        style="width: 15rem; padding-bottom: 1rem; margin: 5px; border-radius: 10px; height: 26rem;">
                        <img src="{{ url($mk['link_picture']) }}" class="m-2 rounded" alt="mk_picture"
                            style="height: 10rem">
                        <div class="card-body">
                            <h6 class="tag tag-teal mb-1">{{ $mk['jurusan'] }}</h6>
                            <h5 class="card-title"> <b>{{ $mk['nama_mk'] }}</b> </h5>
                            <p class="card-text">
                            <h6>Dosen Pengampu : <br>
                                @foreach ($dosen as $dsn)
                                    @if ($mk['nip_dosen'] === $dsn['nip'])
                                        {{ $dsn['nama'] }}
                                    @endif
                                @endforeach
                                <div class="mt-3">
                                    Asisten :
                                </div>

                                @php
                                    $i = 1;
                                    $status = 0;
                                @endphp
                                @foreach ($asisten as $aslab)
                                    @if ($aslab['mataKuliah'] === $mk['nama_mk'] && $aslab['status'] === 1)
                                        {{ $i }}. {{ $aslab['nama'] }} {!! '<br>' !!}
                                        @php
                                            $i += 1;
                                            $status = 1;
                                        @endphp
                                    @endif
                                @endforeach
                                @if ($status !== 1)
                                    Tidak ada Asisten
                                @endif
                            </h6>
                            </p>
                        </div>
                    </div>
                    @php
                        $j += 1;
                    @endphp

                    @break($j > 4)
                @endforeach
            </div>
        </section>
        <!-- /.content -->
    </section>
@endsection
