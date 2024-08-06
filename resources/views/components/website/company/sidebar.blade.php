<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('frontend.company.index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('dashboard/assets/images/stclogo-light.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('dashboard/assets/images/stclogo-light.png') }}" alt="" height="100">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav" style="font-weight: bold;">
                <li class="menu-title"><span data-key="t-menu">{{ ucfirst('reports') }}</span></li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-key="t-detached">{{ ucwords('mpi') }}</a>
                </li>

                {{-- @foreach ($parent as $item)
                <link rel="stylesheet" href="{{ asset('dashboard/layouts/components/sidebar/css/style.css') }}">
                <li class="nav-item">
                    @if (!empty($item->route))
                        <a href="{{ !empty($item->type) ? route($item->route, ['type' => $item->type]) : route($item->route) }}"
                            class="nav-link
                                @if (Request::fullUrl() === (!empty($item->type) ? route($item->route, ['type' => $item->type]) : route($item->route))) activeSidebar @endif"
                            data-key="t-detached">{{ ucwords($item->name) }}</a>
                    @endif
                </li>
                <script src="{{ asset('dashboard/layouts/components/sidebar/js/script.js') }}"></script>
                @endforeach --}}
            </ul>
        </div>
    </div>
</div>
