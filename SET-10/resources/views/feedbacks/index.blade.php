<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (count($feedbacks)>0)
        <table border=1>
            <tr>
                <th>SR No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Status</th>
            </tr>
            @foreach ($feedbacks as $feedback)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $feedback->name }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td>{{ $feedback->message }}</td>
                    @if (strlen($feedback->message)> 10)
                    <td>LONG</td>
                    @else
                    <td>SHORT</td>
                    @endif
                </tr>
            @endforeach
        </table>
        @else
            <p>No Feedback forms</p>
        @endif
</body>
</html>