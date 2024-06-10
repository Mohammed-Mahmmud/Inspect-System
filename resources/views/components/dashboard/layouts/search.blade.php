@if (isset($route) && isset($model))
    <form class="tablelist-form" action="{{ route('reports.search') }}" method="POST" enctype="multipart/form-data"
        id="submitForm">
        @csrf
        <div class="input-group">
            <input type='hidden' name="model" value="{{ $model }}">
            <input type='hidden' name="route" value="{{ $route }}">
            <input type='hidden' name="type" value="{{ $type }}">
            <input name="search" type="search" class="form-control" placeholder="SearchBy serial or RepNum"
                aria-label="by serial or RepNum" aria-describedby="basic-addon2">
            <button class="input-group-text btn btn-primary"><i class=" bx bx-search"></i></button>
        </div>
    </form>
@endif
