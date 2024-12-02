@extends('layouts.adminboard')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="text-primary text-center">Welcome Back Mimin Hanssu</h1>
                <div class="col-12">
                    <div class="card">
                        <!-- Flex container -->
                        <div class="d-flex flex-column justify-content-center align-items-center gap-3 mb-3">
                            <!-- Tombol Grafik Visitor -->
                            <a href="{{ route('visitor') }}"
                                class="btn btn-info col-lg-4 col-md-6 col-sm-8 mx-auto text-center font-semibold"
                                style="color: black; text-decoration: none;">
                                Grafik Visitor
                            </a>
                            <!-- Tombol Logout -->
                            <form method="POST" action="{{ route('logout') }}" class="col-lg-4 col-md-6 col-sm-8 mx-auto">
                                @csrf
                                <button class="btn btn-danger w-100" type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
