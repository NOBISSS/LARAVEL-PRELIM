<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('message'))
        <div>
            <p>✅ {{ session('message') }}</p>
        </div>
    @endif
    <div>
        @if(count($products)>0)    
            <table border=1 cellspacing=5 cellpadding=6 style="border-collapse:collapse">
                <tr>
                    <th>Sr No</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        @if($product->quantity > 0)
                            <td>✅Available</td>
                        @else
                            <td>⏳Out Of Stock</td>
                        @endif
                    </tr>
                @endforeach
            </table>
        @else
            <div>
                <h1>There is no Product Yet!!</h1>
                <p><a href="{{ route('products.create') }}">Create Your First Product</a></p>
            </div>
        @endif
    </div>
</body>
</html>