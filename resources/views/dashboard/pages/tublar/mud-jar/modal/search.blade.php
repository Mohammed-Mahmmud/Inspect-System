<div class="d-flex flex-wrap gap-2">
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#searchTopModal" aria-controls="searchTopModal">Filter
        <i class="bx bx-search-alt"></i>
    </button>
</div>
<!-- top offcanvas -->
<div class="offcanvas offcanvas-top" tabindex="-1" id="searchTopModal" aria-labelledby="searchTopModalLabel">
    <div class="offcanvas-header">
        <h5 id="searchTopModalLabel">Search By</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form class="tablelist-form" action="{{ route('mud-jar.reports.search') }}" method="POST" enctype="multipart/form-data" id="searchForm">
           @csrf
            <div class="row align-items-center">
                <div class="col-sm">
                    <x-form.dropdown class="col-12" name="order_id" id="order_id" disabledOption="Choose Order" :data="$orders" />
                </div>
                <div class=" col-sm">
                    <input type="date" name="date" class="col-12 form-control" placeholder="Enter Exam Date ">
                    <input type="hidden" name="type" value={{ $type }}>
                </div>
                <div class="col-sm">
                    <!-- Add a submit button -->
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
