<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    <div>
    <form action="{{ route('feedbacks.store') }}" method="POST">
        @csrf
        <input type="text" name="name"/><br>
        <input type="text" name="email"/><br>
        <input type="text" name="message"/><br>
        <button type="submit">Send Feedback</button>
    </form>
    </div>
</body>
</html>