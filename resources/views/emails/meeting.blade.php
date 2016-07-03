<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
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
            <td>Nationality: {{ $data->nationality }}</td>
        </tr>
        <tr>
            <td>Country: {{ $data->country }}</td>
        </tr>
        <tr>
            <td>Nationality: {{ $data->nationality }}</td>
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
            <td>Event: {{ $data->event }}</td>
        </tr>
        <tr>
            <td>Company: {{ $data->company }}</td>
        </tr>
        <tr>
            <td>Category: {{ $data->category }}</td>
        </tr>
        <tr>
            <td>Attendee: {{ $data->attendance }}</td>
        </tr>
        <tr>
            <td>Rooms: {{ $data->rooms }}</td>
        </tr>
        <tr>
            <td>Budget: {{ $data->budget }}</td>
        </tr>
        <tr>
            <td>Needs: {{ $data->needs }}</td>
        </tr>
        <tr>
            <td>Activity: {{ $data->activity }}</td>
        </tr>


        <tr>
            <td>Requested Start Date: {{ $data->requeststart }}</td>
        </tr>
        <tr>
            <td>Requested End Date: {{ $data->requestend }}</td>
        </tr>
        <tr>
            <td>Alternate Start Date: {{ $data->alternatestart }}</td>
        </tr>
        <tr>
            <td>Alternate End Date: {{ $data->alternateend }}</td>
        </tr>

        <tr>
            <td>Message: <br>{{ $data->message }}</td>
        </tr>
    </table>
</body>
</html>
