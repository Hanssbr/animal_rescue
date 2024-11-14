@extends('layouts.blank')


@section('page-heading', 'Daftar Hewan')
@section('content')
    <section class="container">
        <div class="row col-12">
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-top img-fluid overflow-hidden" src="{{ asset('image/kuching.jpg') }}"
                            alt="Card image cap" style="height: 20rem" />
                        <div class="card-body">
                            <h4 class="card-title text-xl pb-2 font-extrabold ">Oyen</h4>
                            <div class="btn btn-success mb-4">Species</div>
                            <p class="card-text">
                                Suka makan pisang soalnya dulu saya merawatnya bareng monyet monyet saya dan saya sudah
                                tidak punya waktu lagi untuk merawat kucing ini
                            </p>
                            <p class="card-text pt-3">
                                saya harap ada yang menyukainya dan mau mengadopsinya
                            </p>
                            <button class="btn btn-primary block mt-4"><a class="text-decoration-none text-white"
                                    href="{{ route('home') }}">Adopt Now</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
