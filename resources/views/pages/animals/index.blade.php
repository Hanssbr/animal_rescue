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

        <div class="row">
            @foreach ($data as $animal)
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid overflow-hidden" src="{{ asset('storage/' . $animal->image) }}"
                                alt="Card image cap" style="height: 20rem" />
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
        </div>
        @if (Auth::user()->role === 'admin')
            <a href="{{ route('admin') }}" class="btn btn-primary col-3 ">Kembali</a>
        @else
            <a href="{{ route('home') }}" class="btn btn-primary col-3 ">Kembali</a>
        @endif


    </section>
@endsection
