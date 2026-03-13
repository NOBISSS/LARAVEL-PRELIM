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
        @if (count($books)>0)

        <table border=1 cellspacing=5 cellpadding=5>
            <tr>
                <th>Sr NO</th>
                <th>title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
            @foreach($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->price}}</td>
                    @if ($book->price > 500)
                        <td>Expensive</td>
                    @else
                        <td>Affordable</td>
                    @endif
                </tr>
            @endforeach
        </table>
        @else
            <p>No Books Added Yet Add</p>
            <a href="{{ route('library.create') }}"></a>
        @endif
    </div>
</body>
</html>