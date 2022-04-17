@extends('Layout/main')

@section('title', "D'AsLab | Mata Kuliah")
@section('head', 'Mata Kuliah')
@section('active', 'active')
@section('link', 'Mata Kuliah')

<!-- Main content -->
@section('container')



    <section class="content text-dark " id=" list-mk" style="background-color: #272A37;">
        <div class="d-flex flex-wrap justify-content-center ">
            @foreach ($mata_kuliah as $mk)
                <div class="card mx-2 p-2" style="width: 14rem;">
                    <img src="{{ url('img/matakuliah/tag.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mk['nama_mk'] }}</h5>
                        <p class="card-text">
                            Dosen Pengampu : <br>{{ $mk['dosen_pengampu'] }}
                            <br>
                            Asisten : <br>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($asisten as $aslab)
                                @if ($aslab['mataKuliah'] === $mk['nama_mk'] && $aslab['status'] === 1)
                                    {{-- @continue($aslab['mataKuliah'] !== $mk['nama_mk'] && ($aslab['status'] === 0 || $aslab === null )) --}}
                                    {{ $i }}. {{ $aslab['nama'] }} <br>
                                    @php
                                        $i += 1;
                                    @endphp
                                @endif
                            @endforeach
                        </p>

                    </div>
                </div>
            @endforeach
        </div>





    </section>
@endsection
