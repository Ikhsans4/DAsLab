@extends('main.layout.user')
@section('title', "D'AsLab | Mata Kuliah")
@section('head', 'Mata Kuliah')

@section('container')
    <section class="content" style="background-color: #272A37;">
        <div class="container-fluid d-flex flex-wrap justify-content-center text-dark mt-3">
            <!-- card -->
            @foreach ($mata_kuliah as $mk)
                @if (($mk['jurusan'] === auth()->user()->jurusan || $mk['nip_dosen'] === auth()->user()->npm) && $mk['semester'] % 2 === $semesterBerjalan)
                    <div class="card mb-2 " style="width: 18rem;  margin: 5px;">
                        <img src="{{ url($mk['link_picture']) }}" alt="mk_picture" class="m-2 rounded"
                            style="height: 10rem">
                        <div class="card-body">
                            <h6 class="tag tag-teal mb-1">{{ $mk['jurusan'] }}</h6>
                            <h5 class="card-title"><b>{{ $mk['nama_mk'] }}</b></h5>
                            <p class="card-text">
                            <h6>Dosen Pengampu : <br>
                                @foreach ($dosen as $dsn)
                                    @if ($mk['nip_dosen'] === $dsn['nip'])
                                        {{ $dsn['nama'] }}
                                    @endif
                                @endforeach
                                @php
                                    $i = 1;
                                    $status = 0;
                                @endphp
                                <div class="mt-3">
                                    Asisten :
                                </div>
                                @foreach ($asisten as $aslab)
                                    @if ($aslab['status'] === 1 && $mk['nama_mk'] === $aslab['mataKuliah'] && $year === $aslab['created_at']->format('Y'))
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
                @endif
            @endforeach
        </div>
    </section>
@endsection
