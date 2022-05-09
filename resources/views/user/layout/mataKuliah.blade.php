@extends('main.layout.user')
@section('title', "D'AsLab | Mata Kuliah")
@section('head', 'Mata Kuliah')
@section('container')

<section class="content" style="background-color: #272A37;">

    <div class="container-fluid d-flex flex-wrap justify-content-center text-dark mt-3">
        <!-- card -->
        @foreach ($mata_kuliah as $mk)
        <div class="card mb-2" style="width: 18rem; padding: 1rem; margin: 5px;">
            <img src="{{ url($mk['link_pic']) }}" class="card-img-top" alt="mk_picture" style="height: 150px; width: auto">
            <div class="card-body">
                <h5 class="card-title"><b>{{ $mk['nama_mk'] }}</b></h5>
                <p class="card-text">
                    @foreach ($dosen as $dsn)
                        @if ($mk['nip_dosen'] === $dsn['nip'])
                        Dosen Pengampu : <br> {{ $dsn['nama'] }}
                        @endif
                    @endforeach
                </p>
            </div>
        </div>
        <!-- end card -->
        @endforeach
    </div>
</section>


@endsection