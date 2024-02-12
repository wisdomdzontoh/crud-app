<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE|PRODUCTS</title>
</head>

<body>
    <h1>Create Products</h1>
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
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="john" />
        </div>
        <div>
            <label for="qty">Quantity</label>
            <input type="text" name="qty" placeholder="20" />
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="10" />
        </div>
        <div>
            <label for="price">Description</label>
            <input type="text" name="description" placeholder="furniture" />
        </div>
        <div>
            <input type="submit" value="Add a new product" />
        </div>
    </form>
</body>

</html>