<!DOCTYPE html>
<html>
<head>
    <title>Show Data</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            {{-- <th>Email</th> --}}
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['url'] }}</td>
            {{-- <td>{{ $item['email'] }}</td> --}}
        </tr>
        @endforeach
    </table>
</body>
</html>