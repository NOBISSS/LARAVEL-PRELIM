<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(@session('success'))
        <p>✅ {{ session('success')}}</p>
    @endif
    <div>
        <form action="{{ route('blogs.store') }}" method="post">
            @csrf
            <input type="text" name="title" placeholder="Enter Title"/> <br>
            <input type="text" name="content" placeholder="Enter content"/> <br>
            <input type="text" name="author" placeholder="Enter author"/> <br>
            <button type="submit">Create Blog</button>
        </form>
        <div>
            <p><a href="/blogs">Check List</a></p>
        </div>
    </div>
</body>
</html>