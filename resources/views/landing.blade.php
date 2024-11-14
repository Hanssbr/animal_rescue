<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>Welcome</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm w-full">
        <div class="container" style="width: 100%">
            <a class="navbar-brand text-info" href="{{ url('/') }}">
                Hewanesia
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


    <section>
        <div class="landing-page d-flex flex-row justify-content-center align-items-center flex-nowrap mt-4"
            style="height: 40rem; width: 100%">
            <div
                class="container d-flex flex-column flex-md-row justify-content-center justify-content-md-evenly gap-10 align-items-center flex-nowrap">
                <div class="cat-image mt-0">
                    <img src="{{ asset('image/kuching withoutbg finish.png') }}" alt="kuching">
                </div>
                <div class="title col-7 col-md-4 " style="margin-top: 4rem">
                    <h1 class="text-center text-info">Hewanesia</h1>
                    <p>"Ketika Anda mengadopsi, Anda tidak hanya memberi tempat untuk hewan tinggal, tetapi juga
                        menciptakan ikatan penuh kehangatan yang akan bertahan seumur hidup."</p>
                    <div class="mt-4">
                        @guest

                            @if (Route::has('login'))
                                <a href="/daftar" class="text-decoration-none text-white bg-info p-2 rounded-3">
                                    Daftar Sekarang
                                </a>
                            @endif
                        @else
                            <a href="/daftar" class="text-decoration-none text-white bg-info p-2 rounded-3">
                                Halaman Utama
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
