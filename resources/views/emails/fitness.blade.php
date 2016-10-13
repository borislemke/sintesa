<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitness Membership Inquiry</title>
</head>
<body>
    <table>

        <tr>
            <td>Fitness Membership Inquiry</td>
        </tr>



        <tr>
            <td>Name: {{ $data->title }} {{ $data->name }}</td>
        </tr>
        <tr>
            <td>Email: {{ $data->email }}</td>
        </tr>
        <tr>
            <td>Telephone: {{ $data->telephone }}</td>
        </tr>

        <tr>
            <td>Address: {{ $data->address }}</td>
        </tr>
        <tr>
            <td>City: {{ $data->city }}</td>
        </tr>
        <tr>
            <td>Province: {{ $data->province }}</td>
        </tr>

        <tr>
            <td>Message: <br>{{ $data->message }}</td>
        </tr>
    </table>
</body>
</html>
