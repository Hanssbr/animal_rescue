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
            @foreach ($data as $report)
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid overflow-hidden" src="{{ asset('storage/' . $report->image) }}"
                                alt="Card image cap" style="height: 20rem" />
                            <div class="card-body">
                                <h4 class="card-title text-xl pb-2 font-extrabold ">{{ $report->name }}</h4>
                                <div class="btn btn-success mb-4">{{ $report->species }}</div>
                                <p class="card-text">
                                    {{ $report->description }}
                                </p>
                                <p class="card-text pt-3">
                                    "Adopsi hewan ini dan beri mereka rumah penuh cinta. Yuk, adopsi sekarang!"
                                </p>
                                <button class="btn btn-primary block mt-4"><a class="text-decoration-none text-white"
                                        href="{{ route('home') }}">Adopt Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ route('home') }}" class="btn btn-primary col-3 ">Kembali</a>


    </section>
@endsection
