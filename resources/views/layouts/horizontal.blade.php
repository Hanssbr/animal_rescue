<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="c-icon" href="{{ asset('image/footstep.png') }}">

    <title>Hewanesia</title>


    <link rel="stylesheet" href="{{ asset('./assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/compiled/css/iconly.css') }}">
</head>

<body>
    <script src="{{ asset('assets/static/js/initTheme.js') }}"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container d-flex justify-content-between align-items-center gap-3">
                        <style>
                            .responsive-logo {
                                width: 100%;
                                /* Default: untuk layar kecil */
                                height: auto;
                            }

                            @media (min-width: 768px) {

                                /* Jika ukuran layar lebih besar */
                                .responsive-logo {
                                    width: 100%;
                                    height: auto;
                                }
                            }
                        </style>
                        <div class="logo">
                            <a href="#"><img src="{{ asset('image/Logo-Hewanesia.png') }}" alt="Logo"
                                    class="responsive.logo"></a>
                        </div>
                        <div class="dropdown">
                            <div class="profile-dropdown d-none d-md-block d-xl-block">

                                <a href="#" id="topbarUserDropdown"
                                    class="user-dropdown d-flex align-items-center dropend dropdown-toggle "
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="text">
                                        <h6 class="user-dropdown-name">{{ Auth::user()->name }}</h6>
                                        <p class="user-dropdown-status text-sm text-muted">{{ Auth::user()->role }}</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                    aria-labelledby="topbarUserDropdown">
                                    <li><a class="dropdown-item" href="{{ route('user.profile') }}">My Account</a></li>
                                    <li><a class="dropdown-item" href="{{ route('user.profile') }}">Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                                <div class="header-top-right d-flex justify-content-end">
                                </div>
                                <!-- Burger button responsive -->
                            </div>
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container d-flex justify-content-center align-items-center">
                        <ul class="nav">
                            <li class="menu-item">
                                @if (Auth::user()->role == 'admin')
                                    <a href="{{ route('admin') }}" class="menu-link">
                                        <span><i class="bi bi-grid-fill"></i> Dashboard</span>
                                    </a>
                                @endif
                                @if (Auth::user()->role == 'user')
                                    <a href="{{ route('home') }}" class="menu-link">
                                        <span><i class="bi bi-grid-fill"></i> Dashboard</span>
                                    </a>
                                @endif
                            </li>
                            @if (Auth::user()->role == 'admin')
                                <li class="menu-item">
                                    <a href="{{ route('animal.review') }}" class="menu-link">
                                        <span><i class="bi bi-stack"></i> Review</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('report.view') }}" class="menu-link">
                                        <span><i class="bi bi-grid-1x2-fill"></i> Laporan</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('admin.adopt') }}" class="menu-link">
                                        <span><i class="bi bi-heart-fill"></i> Adopsi</span>
                                    </a>
                                </li>
                            @endif
                            @if (Auth::user()->role == 'user')
                                <li class="menu-item">
                                    <a href="{{ route('animal') }}" class="menu-link">
                                        <span><i class="bi bi-heart-fill"></i> Adopsi</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('report') }}" class="menu-link">
                                        <span><i class="bi bi-file-earmark-medical-fill"></i> Penyelamatan</span>
                                    </a>
                                </li>
                            @endif
                            <li class="menu-item d-md-none d-xl-none d-block">
                                <a href="{{ route('user.profile') }}" class="menu-link">
                                    <span><i class="bi bi-person-fill"></i> My Account</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>



            </header>

            <div class="content-wrapper container">

                <div class="page-content d-flex justify-content-center mb-4">
                    <h3>@yield('page-heading')</h3>
                </div>

                <div class="page-content">
                    @yield('content')
                </div>
            </div>

            <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2024 &copy; Hanssu</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('assets/static/js/pages/horizontal-layout.js') }}"></script>
    <script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('assets/compiled/js/app.js') }}"></script>


    <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/static/js/pages/dashboard.js') }}"></script>

</body>

</html>
