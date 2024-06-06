<form class="tablelist-form" action="{{ $route }}" method="POST" enctype="multipart/form-data" id="submitForm">
    @csrf
    <div class="input-group">
        <input name="search" type="search" class="form-control" placeholder="SearchBy serial or RepNum"
            aria-label="by serial or RepNum" aria-describedby="basic-addon2">
        <button class="input-group-text btn btn-primary"><i class=" bx bx-search"></i></button>
    </div>
</form>
