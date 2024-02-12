<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT|PRODUCTS</title>
</head>

<body>
    <h1>Edit Products</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($$errors->all() as $$error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="mango" value="{{$product->name}}" />
        </div>
        <div>
            <label for="qty">Quantity</label>
            <input type="text" name="qty" placeholder="20" value="{{$product->qty}}" />
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="10" value="{{$product->price}}" />
        </div>
        <div>
            <label for="price">Description</label>
            <input type="text" name="description" placeholder="furniture" value="{{$product->description}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>

</html>