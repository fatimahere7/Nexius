<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   
    <h1>Products</h1>
    <div>
        @if (session()->has('sucess'))
          <div>
             {{ session('sucess') }}
          </div>
            
        @endif
    </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Price</th>
            <th scope="col">Describtion</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product )
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->email }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->describtion }}</td>
                <td>
                    <a href="{{ route('product.edit',['product'=> $product]) }}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('product.delete',['product'=>$product]) }}"> 
                     @csrf
                     @method('delete')   
                       {{-- <input type="button" class="btn btn-danger" value="Delete"></input> --}}
                        <input type="submit" value="Delete">
                    </form>
                </td>
              </tr>
            @endforeach
          {{-- <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Otto</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Otto</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>Otto</td>
          </tr> --}}
        </tbody>
      </table>
</body>
</html>