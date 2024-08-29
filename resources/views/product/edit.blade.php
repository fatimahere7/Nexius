<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('/CSS/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>Edit the product</h1><br><br>
    <div>
        @if($errors->any())
         <ul>  
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
        @endif
        
    </div>
    <form method="post" action="{{ route('product.update',['product'=>$product]) }}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
           
          </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ $product->email }}">
         
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
           
          </div>
        <div class="form-group">
          <label  for="describtion">Describtion</label>
          <input type="text" class="form-control" id="describtion" name="describtion" value="{{ $product-> describtion}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        {{-- <div>
            <input type="submit" value="save Product">
        </div> --}}
        
    </form>
</body>
</html>