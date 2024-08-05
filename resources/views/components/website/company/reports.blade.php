    <div class="table">
        <div class="table-wrapper">
            <table class="fl-table" id="table_id">
                <thead>
                    <tr>
                        <th scope="col" style="width: 50px;">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                            </div>
                        </th>
                        <th>#</th>
                        <th>Header 1</th>
                        <th>Header 2</th>
                        <th>Header 3</th>
                        <th>Header 4</th>
                        <th>Header 5</th>
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                <tbody>
                    @foreach ($reports as $item)
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input chk_child" type="checkbox"
                                        id="chk_child_{{ $item->id }}" name="chk_child[]"
                                        value="{{ $item->id }}">
                                </div>
                            </th>
                            <td>{{ $i++ }}</td>
                            <td>{{ $i++ }}</td>
                            <td>{{ $i++ }}</td>
                            <td>{{ $i++ }}</td>
                            <td>{{ $i++ }}</td>
                            <td>{{ $i++ }}</td>
                    @endforeach
                    </tr>
                <tbody>
            </table>
        </div>
    </div>
