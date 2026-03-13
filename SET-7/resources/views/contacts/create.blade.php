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
        @foreach ($errors as $error)
            <p>{{$error}}</p>
            
        @endforeach
    @endif
    @if(session('success'))
        <p>✅ {{ session('message') }}</p>
    @endif
    <div>
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="eg. John" /><br>
            <input type="text" name="email" placeholder="eg. Wick" /><br>
            <input type="text" name="message" placeholder="eg. ABCDE" /><br>
            <button>Contact Us</button>
        </form>
    </div>
</body>
</html>