@extends('layouts.dashboard')

@section('page-heading', 'Your Profile')
@section('content')
    <div class="container">
        @if (session('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        @endif
        @if (session('errorMessage'))
            <div class="alert alert-success">{{ session('errorMessage') }}</div>
        @endif
        <div class="col-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('user.update') }}" method="POST">

                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name"
                                value="{{ Auth::user()->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control"
                                placeholder="Your Email" value="{{ Auth::user()->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="telp" class="form-label">Phone</label>
                            <input type="text" name="telp" id="telp" class="form-control"
                                placeholder="Your Phone" value="{{ Auth::user()->telp }}" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                </div>
                </form>
                <div class="col-5">
                    <div class="card">
                        <form method="POST" class="d-flex justify-content-evenly align-items-center "
                            action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-danger col-10" type="submit">Logout</button>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
@endsection
