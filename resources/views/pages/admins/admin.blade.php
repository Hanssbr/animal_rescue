@extends('layouts.adminboard')

@section('page-heading', 'Welcome Admin')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="text-primary">Welcome Back Mimin</h1>
                <div class="col-12">
                    <div class="card">
                        <div class="d-flex justify-content-evenly align-items-center col-2 mb-3">
                            <button class="btn btn-info col-12 font-semibold" type="submit"><a href="{{ route('visitor') }}"
                                    style="color: black; text-decoration: none;">Grafik Visitor</a></button>
                        </div>
                        <form method="POST" class="d-flex justify-content-evenly align-items-center col-2"
                            action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-danger col-12" type="submit">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
