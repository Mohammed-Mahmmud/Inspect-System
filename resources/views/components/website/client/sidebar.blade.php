<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('frontend.client.index') }}" class="logo logo-light">
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
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{ route('frontend.client.show', 'mpi') }}" class="nav-link"
                            data-key="t-detached">{{ ucwords('mpi reports') }}</a>
                    </li>
                </ul>

                <li class="menu-title"><span data-key="t-menu">{{ ucfirst('lifting') }}</span></li>
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{ route('examination.reports.show', 'mpi') }}" class="nav-link"
                            data-key="t-detached">{{ ucwords('wire reports') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('frontend.client.show', 'mpi') }}" class="nav-link"
                            data-key="t-detached">{{ ucwords('shakle reports') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('frontend.client.show', 'mpi') }}" class="nav-link"
                            data-key="t-detached">{{ ucwords('throught examination reports') }}</a>
                    </li>
                </ul>

                <li class="menu-title"><span data-key="t-menu">{{ ucfirst('Tublar') }}</span></li>
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{ route('frontend.client.show', 'mpi') }}" class="nav-link"
                            data-key="t-detached">{{ ucwords('tools reports') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('frontend.client.show', 'mpi') }}" class="nav-link"
                            data-key="t-detached">{{ ucwords('mud reports') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('frontend.client.show', 'mpi') }}" class="nav-link"
                            data-key="t-detached">{{ ucwords('jar reports') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('frontend.client.show', 'mpi') }}" class="nav-link"
                            data-key="t-detached">{{ ucwords('drill pipe reports') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('frontend.client.show', 'mpi') }}" class="nav-link"
                            data-key="t-detached">{{ ucwords('drill collar reports') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('frontend.client.show', 'mpi') }}" class="nav-link"
                            data-key="t-detached">{{ ucwords('heavy weight reports') }}</a>
                    </li>
                </ul>

                <li class="menu-title"><span data-key="t-menu">{{ ucfirst('job ticket') }}</span></li>
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{ route('frontend.client.show', 'mpi') }}" class="nav-link"
                            data-key="t-detached">{{ ucwords('jobticket') }}</a>
                    </li>
                </ul>
                <br>
            </ul>
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
