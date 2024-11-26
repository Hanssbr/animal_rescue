@extends('layouts.adminboard')

@section('page-heading', 'Biodata Hewan Yang Di Adopsi')
@section('content')
    <section>
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img-top img-fluid overflow-hidden" src="{{ asset('storage/' . $data->image) }}"
                        alt="Card image cap" style="height: 20rem" />
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <h4 class="card-title text-xl pb-2 font-extrabold ">{{ $data->name }}</h4>
                            @if ($data->status != 'Rescued')
                                <div class="btn btn-danger mb-4">{{ $data->status }}</div>
                            @elseif ($data->status != 'Adopted')
                                <div class="btn btn-warning mb-4">{{ $data->status }}</div>
                            @else
                                <div class="btn btn-warning mb-4">{{ $data->status }}</div>
                            @endif
                        </div>
                        @if ($data->gender == 'Male')
                            <div class="btn btn-primary mb-4">{{ $data->gender }}</div>
                        @elseif ($data->gender == 'Female')
                            <div class="btn mb-4" style="background-color: pink; color: black">
                                {{ $data->gender }}</div>
                        @else
                            <div class="btn btn-secondary mb-4">{{ $data->gender }}</div>
                        @endif
                        <p class="card-text">
                            {{ $data->description }}
                        </p>
                        <p class="card-text pt-3">
                            "Adopsi hewan ini dan beri mereka rumah penuh cinta. Yuk, adopsi sekarang!"
                        </p>
                        <button class="btn btn-success block mt-4"><a class="text-decoration-none text-white"
                                href="{{ route('animal.status', $data->id) }}">Add</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
