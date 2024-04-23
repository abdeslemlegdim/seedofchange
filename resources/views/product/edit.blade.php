<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> edit a product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

        @endif
</div>
    <form method="post" action="{{route('product.update', ['product' => $product ])}}">
        @csrf
        @method('put')
        <div>
            <label>name</label>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}"/>
        </div>
        <div>
            <label>qty</label>
            <input type="text" name="qty" placeholder="qty" value="{{$product->qty}}"/>
        </div>
        <div>
            <label>prie</label>
            <input type="text" name="prie" placeholder="prie" value="{{$product->prie}}"/>
        </div>
        <div>
            <label>description</label>
            <input type="text" name="description" placeholder="description" value="{{$product->description}}"/>
        </div>
        <div>
            <input type="submit" value="update"/>
        </div>
    </form>    
</body>
</html>