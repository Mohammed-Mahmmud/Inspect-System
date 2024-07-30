<!doctype html>
<html lang="en">

<head>
    <title>STC - Clients</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('website/assets/pages/company/css/style.css') }}">
</head>

<body>
    <h1><span style="">{{ $company->full_name }}</span></h1>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>Header 1</th>
                    <th>Header 2</th>
                    <th>Header 3</th>
                    <th>Header 4</th>
                    <th>Header 5</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Content 1</td>
                    <td>Content 1</td>
                    <td>Content 1</td>
                    <td>Content 1</td>
                    <td>Content 1</td>
                </tr>

            <tbody>
        </table>
    </div>
</body>
<script src="{{ asset('website/assets/pages/company/js/script.js') }}"></script>

</html>
