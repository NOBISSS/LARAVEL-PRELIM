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
        @if (count($blogs)>0)
            <table border=1 cellspacing=5 cellpadding=5 style="border-collapse: collapse">
                <tr>
                    <th>Sr NO</th>
                    <th>title</th>
                    <th>content</th>
                    <th>author</th>
                    <th>View</th>
                </tr>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->content }}</td>
                        <td>{{ $blog->author }}</td>
                        <td><a href="/blog/{{ $blog->id }}">View</a></td>
                    </tr>
                @endforeach
            </table>
        @else
            <p>Create Your First Blog</p>
            <a href="{{ route('blogs.create') }}">Click Here</a>
        @endif
    </div>
</body>
</html>