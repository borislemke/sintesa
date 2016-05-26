<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Name: {{ $data->name }}</td>
        </tr>
        <tr>
            <td>Email: {{ $data->email }}</td>
        </tr>
        <tr>
            <td>Message: <br>{{ $data->message }}</td>
        </tr>
    </table>
</body>
</html>
