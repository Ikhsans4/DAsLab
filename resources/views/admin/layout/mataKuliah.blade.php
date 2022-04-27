@extends('main.layout.admin')
@section('title', "D'AsLab | Mata Kuliah")
@section('head', 'Mata Kuliah')
@section('link', 'Mata Kuliah')

<!-- Main content -->
@section('container')
    <section class="content text-dark " id=" list-mk" style="background-color: #272A37;">
        <div class="d-flex flex-wrap justify-content-center ">
            @foreach ($mata_kuliah as $mk)
                <div class="card mx-2 p-2" style="width: 14rem;">
                    <img src="{{ url('img/matakuliah/tag.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $mk['nama_mk'] }}</b></h5>
                        <p class="card-text">
                            Dosen Pengampu : <br>{{ $mk['dosen_pengampu'] }}
                        </p>
                        <p>
                            Asisten :
                        </p>
                        <p>
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
@endsection
