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
    @if (session('success'))
        <div>
            <p>✅ {{ session('success') }}</p>
        </div>
    @endif
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="eg. Earphones"/><br>
        <input type="number" name="price" placeholder="eg. 100"/><br>
        <input type="number" name="quantity" placeholder="eg. 5 | 10"/><br>
        <button type="submit">Create</button>
    </form>
    <div>
        <a href="{{ route('products.index') }}">Check List of Products</a>
    </div>
    </div>
</body>
</html>