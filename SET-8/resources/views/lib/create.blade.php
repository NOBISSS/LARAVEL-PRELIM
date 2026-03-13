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
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
        
    @endif
    <div>
        <form action="{{ route('library.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Enter Title"/><br>
            <input type="text" name="author" placeholder="Enter Author"/><br>
            <input type="number" name="price" placeholder="Enter price"/><br>
            <button type="submit">Add Book</button>
        </form>
    </div>
</body>
</html>