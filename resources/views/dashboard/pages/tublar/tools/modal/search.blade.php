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
        <form class="tablelist-form" action="{{ route('tools.reports.search') }}" method="POST" enctype="multipart/form-data" id="searchForm">
            @csrf
            <div class="row align-items-center">
                <div class="col-sm col-4">
                    <x-form.dropdown class="col-12" label="Choose JobTicket Number" name="order_id" id="order_id" disabledOption="Choose Order" :data="$orders" />
                </div>
                <div class=" col-sm col-6">
                    <label for="exam_date"><b>Start Report Date</b></label>
                    <input type="date" name="exam_date" id="exam_date" class="col-4 form-control" placeholder="Enter Exam Date ">
                </div>
                <div class=" col-sm col-6">
                    <label for="fin_date"><b>Finish Report Date</b></label>
                    <input type="date" name="fin_date" id="fin_date" class="col-4 form-control" placeholder="Enter Exam Date ">
                </div>
                <input type="hidden" name="type" value={{ $type }}>
                <div class="col-sm">
                    <!-- Add a submit button -->
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>
  
</div>
