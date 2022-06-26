{{--

=========================================================
* Argon Dashboard PRO - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro-laravel
* Copyright 2018 Creative Tim (https://www.creative-tim.com) & UPDIVISION (https://www.updivision.com)

* Coded by www.creative-tim.com & www.updivision.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @if (config('app.is_demo'))
            <!-- Anti-flicker snippet (recommended)  -->
            <style>.async-hide { opacity: 0 !important} </style>
            <script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
            h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
            (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
            })(window,document.documentElement,'async-hide','dataLayer',4000,
            {'GTM-K9BGS8K':true});</script>

            <!-- Analytics-Optimize Snippet -->
            <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-46172202-22', 'auto', {allowLinker: true});
            ga('set', 'anonymizeIp', true);
            ga('require', 'GTM-K9BGS8K');
            ga('require', 'displayfeatures');
            ga('require', 'linker');
            ga('linker:autoLink', ["2checkout.com","avangate.com"]);
            </script>
            <!-- end Analytics-Optimize Snippet -->

            <!-- Google Tag Manager -->
            <script>
                (function(w,d,s,l,i) {
                    w[l]=w[l]||[];w[l].push({'gtm.start':
                        new Date().getTime(),event:'gtm.js'});
                        var f=d.getElementsByTagName(s)[0];
                        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
                        j.async=true;
                        j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
                        f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
            <!-- End Google Tag Manager -->
        @endif
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title itemprop="name">{{ $metaTitle ?? 'Argon Dashboard PRO Laravel - Premium Frontend Preset for Laravel' }}</title>

        @if (config('app.is_demo'))

        <!-- Canonical SEO -->
        <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" />

        <!--  Social tags      -->
        <meta name="keywords" content="creative tim, updivision, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, laravel dashboard, bootstrap 4, laravel, css3 dashboard, bootstrap 4 admin, argon laravel dashboard, bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, argon laravel design, argon laravel dashboard bootstrap">
        <meta name="description" content="Argon Laravel Dashboard PRO is a beautiful Bootstrap 4 & Laravel admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

        <!-- Schema.org markup for Google -->
        <meta itemprop="name" content="Argon Dashboard PRO Laravel - Premium Frontend Preset for Laravel">
        <meta itemprop="description" content="Argon Dashboard PRO Laravel is a beautiful Bootstrap 4 admin dashboard with a large number of components built by Creative Tim & UPDIVISION. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

        <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/146/original/opt_adp_laravel_thumbnail.jpg">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@creativetim">
        <meta name="twitter:title" content="Argon Dashboard PRO Laravel - Premium Frontend Preset for Laravel">

        <meta name="twitter:description" content="Argon Dashboard PRO Laravel is a beautiful Bootstrap 4 admin dashboard with a large number of components built by Creative Tim & UPDIVISION. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
        <meta name="twitter:creator" content="@creativetim">
        <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/146/original/opt_adp_laravel_thumbnail.jpg">

        <!-- Open Graph data -->
        <meta property="fb:app_id" content="655968634437471">
        <meta property="og:title" content="Argon Dashboard PRO Laravel - Premium Frontend Preset for Laravel" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://argon-dashboard-pro-laravel.creative-tim.com/" />
        <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/146/original/opt_adp_laravel_thumbnail.jpg"/>
        <meta property="og:description" content="Argon Dashboard PRO Laravel is a beautiful Bootstrap 4 admin dashboard with a large number of components built by Creative Tim & UPDIVISION. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
        <meta property="og:site_name" content="Creative Tim & UPDIVISION" />

        @endif

        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

        <!-- Bootstrap Tourist -->
        <link href="{{ asset('argon') }}/css/bootstrap-tourist.css" rel="stylesheet">

        @stack('css')

        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('css') }}/argon.css?v=2.2.0" rel="stylesheet">
    </head>
    <body class="{{ $class ?? '' }}">
        @if (config('app.is_demo'))
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
        @endif
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @if (!in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock']))
                @include('layouts.navbars.sidebar')
            @endif
        @endauth

        <div class="main-content">
            @include('layouts.navbars.navbar')
            @yield('content')
        </div>

        @if(!auth()->check() || in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock']))
            @include('layouts.footers.guest')
        @endif

        {{-- <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script> --}}
        {{-- <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script> --}}
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="{{ asset('argon') }}/vendor/js-cookie/js.cookie.js"></script>
        <script src="{{ asset('argon') }}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/lavalamp/js/jquery.lavalamp.min.js"></script>
        <!-- Optional JS -->
        <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
        <script src="{{ asset('argon') }}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

        @stack('js')

        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.1"></script>
        <script src="{{ asset('argon') }}/js/demo.min.js"></script>
        <!-- Bootstrap Tourist -->
        <script src="{{ asset('argon') }}/js/bootstrap-tourist.js"></script>
        @if (config('app.is_demo'))
            <script src="{{ asset('argon') }}/js/tour.js?v=1"></script>
        @endif

    </body>
</html>
