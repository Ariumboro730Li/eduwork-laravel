<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner scroll-scrollx_visible">
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item {{ $elementName == 'Income' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('income')}}">
                            <i class="ni ni-money-coins text-green"></i>
                            <span class="nav-link-text">{{ __('Income') }}</span>
                        </a>
                        <a class="nav-link" href="#">
                            <i class="ni ni-money-coins text-danger"></i>
                            <span class="nav-link-text">{{ __('Outcome') }}</span>
                        </a>
                        <a class="nav-link" href="{{url('category')}}">
                            <i class="ni ni-umbrella-13 text-primary"></i>
                            <span class="nav-link-text">{{ __('Category') }}</span>
                        </a>
                        <a class="nav-link" href="#">
                            <i class="ni ni-user-run text-info"></i>
                            <span class="nav-link-text">{{ __('Users') }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
