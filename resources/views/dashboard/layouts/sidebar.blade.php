<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('mainDashboard.index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('dashboard')}}/assets/images/stclogo-light.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('dashboard')}}/assets/images/stclogo-light.png" alt="" height="100">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav" style="font-weight: bold;">
                <li class="menu-title"><span data-key="t-menu">{{ trans('Dashboard/sidebar.Menu') }}</span></li>
                @if(auth()->user()->role ==1)
                    <li class="nav-item ">
                        <a class="nav-link menu-link collapsed" href="#companysidebar" data-bs-toggle="collapse"
                           role="button" aria-expanded="true" aria-controls="companysidebar">
                            <i class="ph-graduation-cap"></i> <span
                                data-key="t-dashboards">{{ trans('Dashboard/sidebar.company') }}</span>
                        </a>
                        <div class="collapse menu-dropdown" id="companysidebar">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('company.index') }}" class="nav-link show active"
                                       data-key="t-analytics"> {{ trans('Dashboard/sidebar.companies-view') }} </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#reportssidebar" data-bs-toggle="collapse" role="button"
                       aria-expanded="true" aria-controls="reportssidebar">
                        <i class="bi bi-clipboard2-check-fill"></i> <span data-key="t-multi-level">Reports</span>
                    </a>
                    <div class="collapse menu-dropdown" id="reportssidebar">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#mpiReport" class="nav-link" data-bs-toggle="collapse" role="button"
                                   aria-expanded="true" aria-controls="mpiReport"
                                   data-key="t-horizontal">{{ trans('Dashboard/sidebar.mpiReport') }}
                                </a>
                                <div class="collapse menu-dropdown" id="mpiReport">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('mpi.reports.index') }}" class="nav-link"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.view_mpi') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('mpi.reports.create') }}" class="nav-link"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.create_mpi') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- lifting  reports --}}
                            <li class="nav-item">
                                <a href="#liftingReports" class="nav-link" data-bs-toggle="collapse" role="button"
                                   aria-expanded="true" aria-controls="liftingReports" data-key="t-horizontal">
                                    Lifting Reports
                                </a>
                                <div class="collapse menu-dropdown" id="liftingReports">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#wireReports" class="nav-link" data-bs-toggle="collapse"
                                               role="button" aria-expanded="true" aria-controls="wireReports"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.wireReports') }}
                                            </a>
                                            <div class="collapse menu-dropdown" id="wireReports">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('examination.reports.index' ,['type'=>'wire']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.viewWire') }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('examination.reports.create' ,['type'=>'wire']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.createWire') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#shakleReport" class="nav-link" data-bs-toggle="collapse"
                                               role="button" aria-expanded="true" aria-controls="shakleReport"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.shakleReport') }}
                                            </a>
                                            <div class="collapse menu-dropdown" id="shakleReport">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('examination.reports.index' ,['type'=>'shakle']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.viewhSakle') }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('examination.reports.create',['type'=>'shakle']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.createhSakle') }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('examination.shaklesize.index') }}" class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.shaklesize') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#examinationReport" class="nav-link" data-bs-toggle="collapse"
                                               role="button" aria-expanded="true" aria-controls="examinationReport"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.examinationReport') }}
                                            </a>
                                            <div class="collapse menu-dropdown" id="examinationReport">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('examination.reports.index' ,['type'=>'thorough']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.viewExamination') }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('examination.reports.create',['type'=>'thorough']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.createExamination') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{--tools reports--}}
                            <li class="nav-item">
                                <a href="#TublarReports" class="nav-link" data-bs-toggle="collapse" role="button"
                                   aria-expanded="true" aria-controls="TublarReports" data-key="t-horizontal">
                                    Tublar Reports
                                </a>
                                <div class="collapse menu-dropdown" id="TublarReports">
                                    <ul class="nav nav-sm flex-column">

                                        <li class="nav-item">
                                            <a href="#ToolsReports" class="nav-link" data-bs-toggle="collapse"
                                               role="button" aria-expanded="true" aria-controls="ToolsReports"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.ToolsReports') }}
                                            </a>
                                            <div class="collapse menu-dropdown" id="ToolsReports">
                                                <ul class="nav nav-sm flex-column">
                                                    {{-- pin x pin   --}}
                                                    <li class="nav-item">
                                                        <a href="#pinxpin" class="nav-link" data-bs-toggle="collapse"
                                                           role="button" aria-expanded="true" aria-controls="pinxpin"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.pinxpin') }}
                                                        </a>
                                                        <div class="collapse menu-dropdown" id="pinxpin">
                                                            <ul class="nav nav-sm flex-column">
                                                                <li class="nav-item">
                                                                    <a href="{{ route('tools.reports.index', ['type'=>'pin*pin']) }}"
                                                                       class="nav-link"
                                                                       data-key="t-horizontal">{{ trans('Dashboard/sidebar.viewpinxpin') }}
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="{{ route('tools.reports.create', ['type'=>'pin*pin']) }}"
                                                                       class="nav-link"
                                                                       data-key="t-horizontal">{{ trans('Dashboard/sidebar.createpinxpin') }}
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    {{-- end pin x pin  --}}
                                                    {{-- box x pin   --}}
                                                    <li class="nav-item">
                                                        <a href="#boxxpin" class="nav-link" data-bs-toggle="collapse"
                                                           role="button" aria-expanded="true" aria-controls="boxxpin"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.boxxpin') }}
                                                        </a>
                                                        <div class="collapse menu-dropdown" id="boxxpin">
                                                            <ul class="nav nav-sm flex-column">

                                                                <li class="nav-item">
                                                                    <a href="{{ route('tools.reports.index',['type'=>'box*pin']) }}"
                                                                       class="nav-link"
                                                                       data-key="t-horizontal">{{ trans('Dashboard/sidebar.viewboxxpin') }}
                                                                    </a>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a href="{{ route('tools.reports.create',['type'=>'box*pin']) }}"
                                                                       class="nav-link"
                                                                       data-key="t-horizontal">{{ trans('Dashboard/sidebar.createboxxpin') }}
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </li>
                                                    {{-- box x box   --}}
                                                    <li class="nav-item">
                                                        <a href="#boxxbox" class="nav-link" data-bs-toggle="collapse"
                                                           role="button" aria-expanded="true" aria-controls="boxxbox"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.boxxbox') }}
                                                        </a>
                                                        <div class="collapse menu-dropdown" id="boxxbox">
                                                            <ul class="nav nav-sm flex-column">
                                                                <li class="nav-item">
                                                                    <a href="{{ route('tools.reports.index',['type'=>'box*box']) }}"
                                                                       class="nav-link"
                                                                       data-key="t-horizontal">{{ trans('Dashboard/sidebar.viewboxxbox') }}
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="{{ route('tools.reports.create',['type'=>'box*box']) }}"
                                                                       class="nav-link"
                                                                       data-key="t-horizontal">{{ trans('Dashboard/sidebar.createboxxbox') }}
                                                                    </a>

                                                            </ul>
                                                        </div>
                                                    </li>
                                                    {{-- end box x box  --}}
                                                </ul>
                                        </li>
                                        {{--mud--}}
                                        <li class="nav-item">
                                            <a href="#mudreports" class="nav-link" data-bs-toggle="collapse"
                                               role="button" aria-expanded="true" aria-controls="mudreports"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.mudreports') }}
                                            </a>
                                            <div class="collapse menu-dropdown" id="mudreports">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('mud-jar.reports.index',['type'=>'mud']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.mud-view') }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('mud-jar.reports.create',['type'=>'mud']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.mud-create') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        {{-- end mud    --}}

                                        {{--jar--}}
                                        <li class="nav-item">
                                            <a href="#jarreports" class="nav-link" data-bs-toggle="collapse"
                                               role="button" aria-expanded="true" aria-controls="jarreports"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.jarreports') }}
                                            </a>
                                            <div class="collapse menu-dropdown" id="jarreports">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('mud-jar.reports.index',['type'=>'jar']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.jar-view') }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('mud-jar.reports.create',['type'=>'jar']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.jar-create') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        {{-- end jar    --}}
                    {{-- tubs --}}
                                        {{--Drill Pipe--}}
                                        <li class="nav-item">
                                            <a href="#drillPipe" class="nav-link" data-bs-toggle="collapse"
                                               role="button" aria-expanded="true" aria-controls="drillPipe"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.drillPipe') }}
                                            </a>
                                            <div class="collapse menu-dropdown" id="drillPipe">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('tubs.reports.index',['type'=>'drillpipe']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.view-drillPipe') }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('tubs.reports.create',['type'=>'drillpipe']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.create-drillPipe') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        {{-- end Drill Pipe   --}}

                                        {{--Drill Collar--}}
                                        <li class="nav-item">
                                            <a href="#drillCollar" class="nav-link" data-bs-toggle="collapse"
                                               role="button" aria-expanded="true" aria-controls="drillCollar"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.drillCollar') }}
                                            </a>
                                            <div class="collapse menu-dropdown" id="drillCollar">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('tubs.reports.index',['type'=>'drillcollar']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.view-drillCollar') }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('tubs.reports.create',['type'=>'drillcollar']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.create-drillCollar') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        {{-- end Drill Collar   --}}

                                        {{-- Heavy Weight--}}
                                        <li class="nav-item">
                                            <a href="#heavyWeight" class="nav-link" data-bs-toggle="collapse"
                                               role="button" aria-expanded="false" aria-controls="heavyWeight"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.heavyWeight') }}
                                            </a>
                                            <div class="collapse menu-dropdown" id="heavyWeight">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('tubs.reports.index',['type'=>'heavyweight']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.view-heavyWeight') }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('tubs.reports.create',['type'=>'heavyweight']) }}"
                                                           class="nav-link active"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.create-heavyWeight') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        {{-- end Heavy Weight   --}}

                                    </ul>
                                </div>
                            </li>
                            {{--end tubs--}}

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarLayouts2" data-bs-toggle="collapse"
                       role="button" aria-expanded="true" aria-controls="sidebarLayouts2">
                        <i class="ph-buildings"></i> <span
                            data-key="ph-buildings">{{ trans('Dashboard/sidebar.Rigs') }}</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts2">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('rig.index') }}" class="nav-link"
                                   data-key="t-horizontal">{{ trans('Dashboard/sidebar.view_rigs') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{--summary--}}
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#summary" data-bs-toggle="collapse"
                       role="button" aria-expanded="true" aria-controls="summary">
                        <i class="bx bx-collection"></i> <span
                            data-key="t-dashboards">{{ trans('Dashboard/sidebar.summary') }}</span>
                    </a>
                    <div class="collapse menu-dropdown" id="summary">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#tublarsummry" class="nav-link" data-bs-toggle="collapse" role="button"
                                   aria-expanded="true" aria-controls="tublarsummry" data-key="t-horizontal">
                                    Tublar Summary
                                </a>
                                <div class="collapse menu-dropdown" id="tublarsummry">
                                    <ul class="nav nav-sm flex-column">

                                        <li class="nav-item">
                                            <a href="#drillcolarsummary" class="nav-link " data-bs-toggle="collapse"
                                               role="button" aria-expanded="true" aria-controls="drillcolarsummary"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.drillcolar') }}
                                            </a>
                                            <div class="collapse menu-dropdown" id="drillcolarsummary">
                                                <ul class="nav nav-sm flex-column ">
                                                    <li class="nav-item ">
                                                        <a href="{{ route('tools-summary.index' ,['type'=>'drillcollar']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.view-drillcollar') }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('tools-summary.create',['type'=>'drillcollar']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.create-drillcollar') }}
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#drillpipesummary" class="nav-link" data-bs-toggle="collapse"
                                               role="button" aria-expanded="true" aria-controls="drillpipesummary"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.drillpipe') }}
                                            </a>
                                            <div class="collapse menu-dropdown" id="drillpipesummary">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('tools-summary.index' ,['type'=>'drillpipe']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.view-drillpipe') }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('tools-summary.create',['type'=>'drillpipe']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.create-drillpipe') }}
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#heavyWeightSummary" class="nav-link" data-bs-toggle="collapse"
                                               role="button" aria-expanded="true" aria-controls="heavyWeightSummary"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.heavyWeight') }}
                                            </a>
                                            <div class="collapse menu-dropdown" id="heavyWeightSummary">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('tools-summary.index' ,['type'=>'heavyweight']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.view-heavyweight') }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('tools-summary.create',['type'=>'heavyweight']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.create-heavyweight') }}
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tubingsummary" class="nav-link" data-bs-toggle="collapse"
                                               role="button" aria-expanded="true" aria-controls="tubingsummary"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.tubing') }}
                                            </a>
                                            <div class="collapse menu-dropdown" id="tubingsummary">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('tools-summary.index' ,['type'=>'tubing']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.casing-view') }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('tools-summary.create' ,['type'=>'tubing']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.tubing-create') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#casingsummary" class="nav-link" data-bs-toggle="collapse"
                                               role="button" aria-expanded="true" aria-controls="casingsummary"
                                               data-key="t-horizontal">{{ trans('Dashboard/sidebar.casing') }}
                                            </a>
                                            <div class="collapse menu-dropdown" id="casingsummary">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('tools-summary.index' ,['type'=>'casing']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.casing-view') }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('tools-summary.create' ,['type'=>'casing']) }}"
                                                           class="nav-link"
                                                           data-key="t-horizontal">{{ trans('Dashboard/sidebar.casing-create') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                {{--end sammry--}}

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#ordersreports" data-bs-toggle="collapse"
                       role="button" aria-expanded="true" aria-controls="ordersreports">
                        <i class="ph-ticket"></i> <span
                            data-key="ph-ticket">{{ trans('Dashboard/sidebar.orders') }}</span>
                    </a>
                    <div class="collapse menu-dropdown" id="ordersreports">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('order.index') }}" class="nav-link"
                                   data-key="t-horizontal">{{ trans('Dashboard/sidebar.view_orders') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('jobTicket.index') }}" class="nav-link"
                                   data-key="t-horizontal">{{ trans('Dashboard/sidebar.view_jobticket') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('jobTicket.create') }}" class="nav-link"
                                   data-key="t-horizontal">{{ trans('Dashboard/sidebar.create_jobticket') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @if(auth()->user()->role ==1)
                    {{-- settings--}}
                    <li class="nav-item">
                        <a class="nav-link menu-link collapsed" href="#sidebarLayouts11" data-bs-toggle="collapse"
                           role="button" aria-expanded="true" aria-controls="sidebarLayouts11">
                            <i class="ph-wrench"></i> <span
                                data-key="ph-wrench">{{ trans('Dashboard/sidebar.settings') }}</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLayouts11">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('admins.index') }}" class="nav-link" data-key="t-horizontal">Admins</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link" data-key="t-detached">Operators</a>
                                </li>
                                {{--  report settings  --}}
                                <li class="nav-item">
                                    <a href="{{ route('report_settings.index') }}" class="nav-link"
                                       data-key="t-detached">Report Settings</a>
                                </li>
                                {{--  end report settings  --}}
                                {{--  role  --}}
                                <li class="nav-item">
                                    <a href="{{ route('roles.index') }}" class="nav-link"
                                       data-key="t-detached">Roles</a>
                                </li>
                                {{--  end role  --}}

                            </ul>
                        </div>
                    </li>
                @endif
                {{-- end sidebar --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>

