<link href="{{ asset('dashboard') }}/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">Responsive Breakpoints Swiper</h4>
        </div>
        <div class="card-body">
            <!-- Swiper -->
            <div class="swiper responsive-swiper rounded gallery-light pb-10">
                <div class="swiper-wrapper">

                    @foreach ($mpi->getMedia($mpi->type) as $image)
                        <div class="swiper-slide">
                            <div class="gallery-box card">
                                <div class="gallery-container">
                                    <a class="image-popup" href="{{$image->getFullUrl()}}" title="">
                                        <img class="gallery-img img-fluid mx-auto" src="{{$image->getFullUrl()}}"
                                             alt="{{$image->name}}">
                                    </a>
                                </div>
                                <div class="box-content px-3 py-2">
                                    <div class="gallery-overlay">
                                        <h5 class="overlay-caption">{{$image->name}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination swiper-pagination-dark"></div>
            </div>
        </div><!-- end card-body -->
    </div><!-- end card -->
</div>
<!--Swiper slider js-->
<script src="{{ asset('dashboard') }}/assets/libs/swiper/swiper-bundle.min.js"></script>
<!-- swiper.init js -->
<script src="{{ asset('dashboard/assets/js/pages/swiper.init.js') }}"></script>
