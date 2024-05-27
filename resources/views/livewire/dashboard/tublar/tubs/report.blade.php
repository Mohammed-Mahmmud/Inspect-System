 <form class="tablelist-form" action="{{ $action }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method($method)
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xxl-6">
                                        <h5 class="mb-3">{{ TranslationHelper::translate($type.' '.ucwords($examType).' '."Details") }}</h5>
                                        <div class="card">
                                            <div class="border">
                                                <ul class="nav nav-pills custom-hover-nav-tabs">
                                                    <li class="nav-item">
                                                        <a href="#custom-hover-customere" data-bs-toggle="tab"
                                                           aria-expanded="false" class="nav-link active">
                                                            <i class="bx bx-notepad  nav-icon nav-tab-position"></i>
                                                            <h5 class="nav-titl nav-tab-position m-0">{{ TranslationHelper::translate(ucwords('header')) }}</h5>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#custom-hover-reviews" data-bs-toggle="tab"
                                                           aria-expanded="false" class="nav-link">
                                                            <i class="bx bx-align-justify nav-icon nav-tab-position"></i>
                                                            <h5 class="nav-titl nav-tab-position m-0">{{ TranslationHelper::translate(ucwords('description')) }}</h5>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                             <div class="row">
                                            <div class="card-body">
                                                <div class="tab-content text-muted">
                                                    <div class="tab-pane show active" id="custom-hover-customere">
                                                        <h6 style="text-align:center">{{ TranslationHelper::translate(ucwords($examType.' '.'Content')) }}</h6>
                                                        <div class="">
                                                            <x-dashboard.reports.tubs.content :type="$type" examType="$examType" accept="$accept"></x-dashboard.reports.tubs.content>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name='type' value="{{ $examType }}" required/>
                                                    <div class="tab-pane" id="custom-hover-reviews">
                                                        <h6 style="text-align:center">{{ TranslationHelper::translate(ucwords($examType.' '.'Table Description')) }}</h6>
                                                        <div class="" style="width:100%">
                                                        {{--  description  --}}
                                                    <x-dashboard.reports.tubs.description :examType="$examType" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card-body -->
                                                    </div>
                                 @livewire('dashboard.tublar.tubs.report',['type'=>$type,'examType'=>$examType])
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <br>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <a type="button" style="color: black; font-weight:bold;" class="btn btn-danger"
                                           href="{{ route( 'tubs.reports.index', [ 'type' =>$examType ] ) }}">{{
                                                    TranslationHelper::translate(ucwords('close')) }}</a>
                                        <button style="color: black; font-weight:bold;" type="submit"
                                                class="btn btn-success" id="add-btn">{{
                                                    TranslationHelper::translate(ucwords('save')) }}</button>
                                    </div>
                                </div>
                        </form>