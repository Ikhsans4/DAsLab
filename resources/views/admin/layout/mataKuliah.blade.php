@extends('Layout/main')

@section('title', 'Kelas')
@section('head', 'Mata Kuliah')

<!-- Main content -->
@section('container')



    <section class="content text-dark" id="list-mk" style="background-color: #272A37;">
        <div class="d-flex flex-wrap text-dark">
            @foreach ($mata_kuliah as $mk)
                <div class="card mx-2" style="width: 18rem;">
                    <img src="{{ url('img/matakuliah/tag.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mk['mata_kuliah'] }}</h5>
                        <p class="card-text">
                            Asisten : <br>
                            @foreach ($asisten as $aslab)
                                @if ($aslab['mataKuliah'] === $mk['mata_kuliah'])
                                    {{ $loop->iteration }}. {{ $aslab['nama'] }} <br>
                                @else
                                    Tidak ada asisten yang mendaftar
                                @break
                            @endif
                        @endforeach
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>




</section>
@endsection
