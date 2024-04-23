<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> create a product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

        @endif
</div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>name</label>
            <input type="text" name="name" placeholder="name"/>
        </div>
        <div>
            <label>qty</label>
            <input type="text" name="qty" placeholder="qty"/>
        </div>
        <div>
            <label>prie</label>
            <input type="text" name="prie" placeholder="prie"/>
        </div>
        <div>
            <label>description</label>
            <input type="text" name="description" placeholder="description"/>
        </div>
        <div>
            <input type="submit" value="save a new product"/>
        </div>
    </form>    
</body>
</html>