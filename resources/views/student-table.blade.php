<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Student Data</h1>
    <table border="1px">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Score</th>
        </tr>
        @foreach ($data as $key => $item)
            <tr>
                <th>{{ $data->firstItem() + $key }}</th>
                <th>{{ $item['nama'] }}</th>
                <th>{{ $item['score'] }}</th>
            </tr>
        @endforeach
    </table>

    {{ $data->links() }}
</body>

</html>
