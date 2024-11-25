@extends('layouts.blank')


@section('page-heading', 'Daftar Hewan')
@section('content')
    <section class="container">
        @if (session('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        @endif
        @if (session('errorMessage'))
            <div class="alert alert-danger">{{ session('errorMessage') }}</div>
        @endif
        <form action="{{ route('search') }}" method="GET">
            <div class="col-md-6 mb-1">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Cari..." aria-label="Recipient's username"
                        name="query" aria-describedby="button-addon2" value="{{ request('query') }}">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
                </div>
            </div>
        </form>
        <div class="row">

            {{-- @if ($results->isEmpty()) --}}
            <p class="text-gray-500">Tidak Ada Hasil Yang Ditemukan.</p>
            {{-- @else --}}
            @foreach ($data as $animal)
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid overflow-hidden"
                                src="{{ asset('storage/' . $animal->image) }}" alt="Card image cap" style="height: 20rem" />
                            <div class="card-body">
                                <div class="d-flex flex-row justify-content-between">
                                    <h4 class="card-title text-xl pb-2 font-extrabold ">{{ $animal->name }}</h4>
                                    @if ($animal->status != 'Rescued')
                                        <div class="btn btn-danger mb-4">{{ $animal->status }}</div>
                                    @elseif ($animal->status != 'Adopted')
                                        <div class="btn btn-warning mb-4">{{ $animal->status }}</div>
                                    @else
                                        <div class="btn btn-warning mb-4">{{ $animal->status }}</div>
                                    @endif
                                </div>
                                @if ($animal->gender == 'Male')
                                    <div class="btn btn-primary mb-4">{{ $animal->gender }}</div>
                                @elseif ($animal->gender == 'Female')
                                    <div class="btn mb-4" style="background-color: pink; color: black">
                                        {{ $animal->gender }}</div>
                                @else
                                    <div class="btn btn-secondary mb-4">{{ $animal->gender }}</div>
                                @endif


                                @if ($animal->species == 'Cat')
                                    <div class="btn mb-4" style="background-color: orange; color: black">
                                        {{ $animal->species }}</div>
                                @elseif ($animal->species == 'Dog')
                                    <div class="btn mb-4" style="background-color: brown; color: white">
                                        {{ $animal->species }}</div>
                                @elseif ($animal->species == 'Snake')
                                    <div class="btn mb-4" style="background-color: lime; color: black">
                                        {{ $animal->species }}</div>
                                @elseif ($animal->species == 'Lizard')
                                    <div class="btn mb-4" style="background-color: green; color: black">
                                        {{ $animal->species }}</div>
                                @else
                                    <div class="btn mb-4" style="background-color: black; color: white">
                                        {{ $animal->species }}</div>
                                @endif
                                <p class="card-text">
                                    {{ $animal->description }}
                                </p>
                                <p class="card-text pt-3">
                                    "Adopsi hewan ini dan beri mereka rumah penuh cinta. Yuk, adopsi sekarang!"
                                </p>
                                @if ($animal->status != 'Adopted')
                                    <button class="btn btn-success block mt-4"><a class="text-decoration-none text-white"
                                            href="{{ route('adopt.create', $animal->uuid) }}">Adopt Now</a></button>
                                @else
                                    <button class="btn btn-secondary block mt-4" disabled><a
                                            class="text-decoration-none text-white"
                                            href="{{ route('adopt.create', $animal) }}">Not Avaible</a></button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- @endif --}}

        </div>
        @if (Auth::user()->role === 'admin')
            <a href="{{ route('admin') }}" class="btn btn-primary col-3 ">Kembali</a>
        @else
            <a href="{{ route('home') }}" class="btn btn-primary col-3 ">Kembali</a>
        @endif


    </section>
@endsection
