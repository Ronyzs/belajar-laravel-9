<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>{{ $activity['activity'] }}</h1>
    <ul>
        @foreach ($students as $item)
            <li>{{ $item['nama'] }}</li>
        @endforeach
    </ul>
</body>

</html>
