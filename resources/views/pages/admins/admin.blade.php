@extends('layouts.adminboard')

@section('page-heading', 'Welcome Admin')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="text-primary">Welcome Back Mimin</h1>
                <div class="col-12">
                    <div class="card">
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
