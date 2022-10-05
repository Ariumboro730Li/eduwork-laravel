<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->
    <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round" />
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

            <li class=" nav-item"><a href="{{ url('home') }}"><i class="icon-home3"></i><span
                        data-i18n="nav.page_layouts.main" class="menu-title">Dashboard</span></a>
                <ul class="menu-content">
                    <li><a href="{{ url('peminjaman') }}" data-i18n="nav.page_layouts.1_column" class="menu-item">
                            Peminjaman</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item"><a href="{{ url('peminjaman') }}"><i class="icon-ios-book"></i><span
                        data-i18n="nav.project.main" class="menu-title">Buku</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-database"></i><span data-i18n="nav.cards.main"
                        class="menu-title">Data Master</span></a>
            </li>
        </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>
