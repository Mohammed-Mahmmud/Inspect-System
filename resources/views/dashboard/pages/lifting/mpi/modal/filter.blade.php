<div class="d-flex flex-wrap gap-2">
    <button class="btn btn-warning" type="button" id="filterButton" data-bs-toggle="offcanvas" data-bs-target="#searchTopModal" aria-controls="searchTopModal">
        <i class="bx bxs-filter-alt"></i>
    </button>
</div>

<!-- top offcanvas -->
<div class="offcanvas offcanvas-top" tabindex="-1" id="searchTopModal" aria-labelledby="searchTopModalLabel">
    <div class="offcanvas-header">
        <h5 id="searchTopModalLabel">Filter Using</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form class="tablelist-form" action="{{ route('mpi.reports.filter') }}" method="POST" enctype="multipart/form-data" id="submitForm">
            @csrf
            <div class="row align-items-center">
                <div class="col-sm">
                    <x-form.dropdown class="col-12" name="order_id" id="order_id" disabledOption="Choose Order" :data="$orders" />
                </div>
                <div class="col-sm">
                    <input type="search" name="serial" class="col-12 form-control" placeholder="Enter Serial Number">
                </div>
                <div class="col-sm">
                    <!-- Add a submit button -->
                    <button type="submit" class="btn btn-success">Go <i class="bx bx-search-alt"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
