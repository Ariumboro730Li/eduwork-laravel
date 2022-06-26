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
                    <li class="nav-item {{ $parentSection == 'dashboards' ? 'active' : '' }}">
                        <a class="nav-link collapsed" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="{{ $parentSection == 'dashboards' ? 'true' : '' }}" aria-controls="navbar-dashboards">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">{{ __('Dashboards') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'dashboards' ? 'show' : '' }}" id="navbar-dashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'dashboard' ? 'active' : '' }}">
                                    <a href="{{ route('home') }}" class="nav-link">{{ __('Dashboard') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'dashboard-alternative' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','dashboard-alternative') }}" class="nav-link">{{ __('Alternative') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                            <i class="fab fa-laravel" style="color: #f4645f;"></i>
                            <span class="nav-link-text" style="color: #f4645f;">{{ __('Laravel Examples') }}</span>
                        </a>
                        <div class="collapse show" id="navbar-examples">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'profile' ? 'active' : '' }}">
                                    <a href="{{ route('profile.edit') }}" class="nav-link">{{ __('Profile') }}</a>
                                </li>
                                @can('manage-users', App\Models\User::class)
                                    <li class="nav-item  {{ $elementName == 'role-management' ? 'active' : '' }}">
                                        <a href="{{ route('role.index') }}" class="nav-link">{{ __('Role Management') }}</a>
                                    </li>
                                @endcan
                                @can('manage-users', App\Models\User::class)
                                    <li class="nav-item {{ $elementName == 'user-management' ? 'active' : '' }}">
                                        <a href="{{ route('user.index') }}" class="nav-link">{{ __('User Management') }}</a>
                                    </li>
                                @endcan
                                @can('manage-items', App\Models\User::class)
                                    <li class="nav-item {{ $elementName == 'category-management' ? 'active' : '' }}">
                                        <a href="{{ route('category.index') }}" class="nav-link">{{ __('Category Management') }}</a>
                                    </li>
                                @endcan
                                @can('manage-items', App\Models\User::class)
                                    <li class="nav-item {{ $elementName == 'tag-management' ? 'active' : '' }}">
                                        <a href="{{ route('tag.index') }}" class="nav-link">{{ __('Tag Management') }}</a>
                                    </li>
                                @endcan
                                @can('manage-items', App\Models\User::class)
                                    <li class="nav-item {{ $elementName == 'item-management' ? 'active' : '' }}">
                                        <a href="{{ route('item.index') }}" class="nav-link">{{ __('Item Management') }}</a>
                                    </li>
                                @else
                                    <li class="nav-item {{ $elementName == 'item-management' ? 'active' : '' }}">
                                        <a href="{{ route('item.index') }}" class="nav-link">{{ __('Items') }}</a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ $parentSection == 'pages' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-pages" data-toggle="collapse" role="button" aria-expanded="{{ $parentSection == 'pages' ? 'true' : '' }}" aria-controls="navbar-pages">
                            <i class="ni ni-collection text-yellow"></i>
                            <span class="nav-link-text">{{ __('Pages') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'pages' ? 'show' : '' }}" id="navbar-pages">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'timeline' ? 'active' : '' }}">
                                    <a href="{{ route('page.index', 'timeline') }}" class="nav-link">{{ __('Timeline') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ $parentSection == 'components' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="{{ $parentSection == 'components' ? 'true' : '' }}" aria-controls="navbar-components">
                            <i class="ni ni-ui-04 text-info"></i>
                            <span class="nav-link-text">{{ __('Components') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'components' ? 'show' : '' }}" id="navbar-components">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'buttons' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','buttons') }}" class="nav-link">{{ __('Buttons') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'cards' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','cards') }}" class="nav-link">{{ __('Cards') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'grid' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','grid') }}" class="nav-link">{{ __('Grid') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'notifications' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','notifications') }}" class="nav-link">{{ __('Notifications') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'icons' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','icons') }}" class="nav-link">{{ __('Icons') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'typography' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','typography') }}" class="nav-link">{{ __('Typography') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">{{ __('Multi') }} level</a>
                                    <div class="collapse show" id="navbar-multilevel" style="">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="#!" class="nav-link ">{{ __('Thirdlevelmenu') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#!" class="nav-link ">{{ __('Justanotherlink') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#!" class="nav-link ">{{ __('Onelastlink') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ $parentSection == 'forms' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="{{ $parentSection == 'forms' ? 'true' : '' }}" aria-controls="navbar-forms">
                            <i class="ni ni-single-copy-04 text-pink"></i>
                            <span class="nav-link-text">{{ __('Forms') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'forms' ? 'show' : '' }}" id="navbar-forms">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'elements' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','elements') }}" class="nav-link">{{ __('Elements') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'components' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','components') }}" class="nav-link">{{ __('Components') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'validations' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','validation') }}" class="nav-link">{{ __('Validations') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ $parentSection == 'tables' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="{{ $parentSection == 'tables' ? 'true' : '' }}" aria-controls="navbar-tables">
                            <i class="ni ni-align-left-2 text-default"></i>
                            <span class="nav-link-text">{{ __('Tables') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'tables' ? 'show' : '' }}" id="navbar-tables">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'tables' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','tables') }}" class="nav-link">{{ __('Tables') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'sortable' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','sortable') }}" class="nav-link">{{ __('Sortable') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'datatables' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','datatables') }}" class="nav-link">{{ __('Datatables') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ $parentSection == 'maps' ? 'active' : '' }}">
                        <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="{{ $parentSection == 'maps' ? 'true' : '' }}" aria-controls="navbar-maps">
                            <i class="ni ni-map-big text-primary"></i>
                            <span class="nav-link-text">{{ __('Maps') }}</span>
                        </a>
                        <div class="collapse {{ $parentSection == 'maps' ? 'show' : '' }}" id="navbar-maps">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ $elementName == 'google' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','googlemaps') }}" class="nav-link">{{ __('Google') }}</a>
                                </li>
                                <li class="nav-item {{ $elementName == 'vector' ? 'active' : '' }}">
                                    <a href="{{ route('page.index','vectormaps') }}" class="nav-link">{{ __('Vector') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ $elementName == 'widgets' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('page.index','widgets') }}">
                            <i class="ni ni-archive-2 text-green"></i>
                            <span class="nav-link-text">{{ __('Widgets') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{ $elementName == 'charts' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('page.index','charts') }}">
                            <i class="ni ni-chart-pie-35 text-info"></i>
                            <span class="nav-link-text">{{ __('Charts') }}</span>
                        </a>
                    </li>
                    <li class="nav-item {{ $elementName == 'calendar' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('page.index','calendar') }}">
                            <i class="ni ni-calendar-grid-58 text-red"></i>
                            <span class="nav-link-text">{{ __('Calendar') }}</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">{{ __('Documentation') }}</h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/docs/getting-started/overview.html') }}" target="_blank">
                            <i class="ni ni-spaceship"></i>
                            <span class="nav-link-text">Getting started</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/docs/foundation/colors.html') }}" target="_blank">
                            <i class="ni ni-palette"></i>
                            <span class="nav-link-text">Foundation</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/docs/components/alerts.html') }}" target="_blank">
                            <i class="ni ni-ui-04"></i>
                            <span class="nav-link-text">Components</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/docs/plugins/charts.html') }}" target="_blank">
                            <i class="ni ni-chart-pie-35"></i>
                            <span class="nav-link-text">Plugins</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
