@extends('Layout/main')

@section('title', 'Kelas')
@section('head', 'Mata Kuliah')
@section('active', 'active')
@section('user', $data['image'])
@section('username', $data['username'])

<!-- Main content -->
@section('container')



    <section class="content text-dark" id="list-mk" style="background-color: #272A37;">
        {{-- @foreach ($mata_kuliah as $mk) --}}
        <div class="card" style="width: 18rem;">
            <img src="" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $mata_kuliah['mata_kuliah'] }}</h5>
                <p class="card-text">
                    Asisten : <br>
                    @foreach ($asisten as $aslab)
                        @if ($aslab['mataKuliah'] === $mata_kuliah['mata_kuliah'])
                            {{ $loop->iteration }}. {{ $aslab['nama'] }} <br>
                        @else
                            Tidak ada asisten yang mendaftar
                        @break
                    @endif
                    {{-- @endforeach --}}
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach




</section>
@endsection
