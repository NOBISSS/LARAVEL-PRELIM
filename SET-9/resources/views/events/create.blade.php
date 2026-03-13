<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
        @endforeach
    @endif
    <div>
        <form action="{{ route('events.store') }}" method="post">
            @csrf
            <input type="text" name="name"/><br>
            <input type="text" name="email"/><br>
            <input type="text" name="event_name"/><br>
            <button type="submit">Create Event</button>
        </form>
        <a href="{{ route('events.index') }}">CHECK LIST OF EVENTS</a>
    </div>
</body>
</html>