<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

    </div>
        <form method="POST" action="{{route('products.store')}}">
            @csrf
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Name"/>
            </div>
            <div>
                <label>Quantity</label>
                <input type="text" name="qty" placeholder="Quantity"/>
            </div>
            <div>
                <label>Price</label>
                <input type="text" name="price" placeholder="Price"/>
            </div>
            <div>
                <label>Description</label>
                <input type="text" name="description" placeholder="Description"/>
            </div>
            <div>
                <input type="submit" value="Save a New Product"/>
            </div>
       </form>
</body>
</html>