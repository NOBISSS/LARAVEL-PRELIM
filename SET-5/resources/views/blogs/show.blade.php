<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div>
        <p>TITLE:{{ $blog->title }}</p>
        <p>Content:{{ $blog->content }}</p>
        <p>Author:{{ $blog->author }}</p>
        <p>Created At:{{ $blog->created_at->format('d M Y') }}</p>
    </div>
</body>
</html>