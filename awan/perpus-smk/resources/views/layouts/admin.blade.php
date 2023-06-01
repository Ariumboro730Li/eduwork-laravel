<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perpus SMK</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        @yield('css')
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{ url('home') }}">Perpus SMK</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>

            {{-- notification --}}
            <ul class="navbar-nav ms-auto ms-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-bell"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @foreach (telat_pengembalian() as $item)
                            <li><p class="dropdown-item">{{ $item->name }} telat mengembalikan</p></li>
                        @endforeach
                    </ul>
                </li>
            </ul>


            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li> <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ url('home') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-home-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{ url('transactions') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Transactions
                            </a>
                            <a class="nav-link" href="{{ url('catalogs') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-th-list"></i></div>
                                Catalog
                            </a>
                            <a class="nav-link" href="{{ url('publishers') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-people-carry"></i></div>
                                Publisher
                            </a>
                            <a class="nav-link" href="{{ url('authors') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-certificate"></i></div>
                                Author
                            </a>
                            <a class="nav-link" href="{{ url('books') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Book
                            </a>
                            <a class="nav-link" href="{{ url('members') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Member
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ auth()->user()->name }}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">

                <div class="container-fluid">
                    <div class="row mb-2 ms-2">
                        <div class="col-sm-6">
                            <h1 class="mt-4">@yield('header')</h1>
                        </div>
                    </div>
                    <main> 
                        @yield('content')
                    </main>
                </div>


                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-end small">
                            <div class="text-muted">Copyright &copy; Awan10Dev 2022</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="{{ asset('assets/assets/demo/chart-pie-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/datatables-simple-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.7.4/dist/vue.js"></script>
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> --}}
        {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
        {{-- <script src="http://code.jquery.com/jquery-1.10.2.js"></script> --}}
        {{-- <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script> --}}
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        @yield('js')
    </body>
</html>
