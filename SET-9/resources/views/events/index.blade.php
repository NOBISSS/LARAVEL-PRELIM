<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (session('success'))
        <p>✅ {{ session('success') }}</p>
    @endif
    <div>   
        <table border=1 cellspacing=5 cellpadding=5 style="border-collapse: collapse">
            <tr>
                <th>Sr No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Event_name</th>
                <th>👁️ View</th>
            </tr>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->email }}</td>
                    <td>{{ $event->event_name }}</td>
                    <td><a href="/event/{{ $event->id }}">View</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>