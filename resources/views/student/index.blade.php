<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders to a table:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                </tr>
            </thead>
            {{-- <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                @endforeach
            </tbody> --}}

            <tbody>
                {{-- 使用Facades之前 --}}
                {{-- @foreach ($data as $value)
                    <tr>
                        $value['']要改成$data裡有的key
                        <td>{{ $value['id'] }}</td>
                        <td>{{ $value['name'] }}</td>
                        <td>{{ $value['mobile'] }}</td>
                    </tr>
                @endforeach --}}
                {{-- 使用Facades抓取資料庫 --}}
                @foreach ($data as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->mobile }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @php
            // dd($data);
        @endphp
    </div>

</body>

</html>
