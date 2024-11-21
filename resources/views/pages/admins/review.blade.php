@extends('layouts.blank')


@section('page-heading', 'Daftar Hewan')
@section('content')
    <section class="container">
        @if (session('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        @endif
        @if (session('dangerMessage'))
            <div class="alert alert-danger">{{ session('dangerMessage') }}</div>
        @endif

        <div class="row">
            @foreach ($data as $review)
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid overflow-hidden" src="{{ asset('storage/' . $review->image) }}"
                                alt="Card image cap" style="height: 20rem" />
                            <div class="card-body">
                                <div class="d-flex flex-row justify-content-between">
                                    <h4 class="card-title text-xl pb-2 font-extrabold ">{{ $review->name }}</h4>
                                    @if ($review->status != 'Rescued')
                                        <div class="btn btn-danger mb-4">{{ $review->status }}</div>
                                    @elseif ($review->status != 'Adopted')
                                        <div class="btn btn-warning mb-4">{{ $review->status }}</div>
                                    @else
                                        <div class="btn btn-warning mb-4">{{ $review->status }}</div>
                                    @endif
                                </div>
                                @if ($review->gender == 'Male')
                                    <div class="btn btn-primary mb-4">{{ $review->gender }}</div>
                                @elseif ($review->gender == 'Female')
                                    <div class="btn mb-4" style="background-color: pink; color: black">
                                        {{ $review->gender }}</div>
                                @else
                                    <div class="btn btn-secondary mb-4">{{ $review->gender }}</div>
                                @endif
                                <p class="card-text">
                                    {{ $review->description }}
                                </p>
                                <p class="card-text pt-3">
                                    "Adopsi hewan ini dan beri mereka rumah penuh cinta. Yuk, adopsi sekarang!"
                                </p>
                                <button class="btn btn-success block mt-4"><a class="text-decoration-none text-white"
                                        href="{{ route('review.addStatus', $review->id) }}">Add</a></button>
                                <button class="btn btn-danger block mt-4"><a class="text-decoration-none text-white"
                                        href="{{ route('report.delete', $review->id) }}">Remove</a></button>
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
