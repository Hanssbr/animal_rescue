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
                            <img class="card-img-top img-fluid overflow-hidden" src="{{ asset($report->image) }}"
                                alt="Card image cap" style="height: 20rem" />
                            <div class="card-body">
                                <div class="d-flex flex-row justify-content-between">
                                    <h4 class="card-title text-xl pb-2 font-extrabold ">{{ $report->name }}</h4>
                                </div>
                                @if ($report->gender == 'Male')
                                    <div class="btn btn-primary mb-4">{{ $report->gender }}</div>
                                @elseif ($report->gender == 'Female')
                                    <div class="btn mb-4" style="background-color: pink; color: black">
                                        {{ $report->gender }}</div>
                                @else
                                    <div class="btn btn-secondary mb-4">{{ $report->gender }}</div>
                                @endif
                                <p class="card-text">
                                    {{ $report->description }}
                                </p>
                                <p class="card-text pt-3">
                                    "Adopsi hewan ini dan beri mereka rumah penuh cinta. Yuk, adopsi sekarang!"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if (Auth::user()->role === 'admin')
            <a href="{{ route('admin') }}" class="btn btn-primary col-lg-3 col-md-4 col-12 mb-2">Kembali</a>
        @else
            <a href="{{ route('home') }}" class="btn btn-primary col-lg-3 col-md-4 col-12 mb-2">Kembali</a>
        @endif


    </section>
@endsection
