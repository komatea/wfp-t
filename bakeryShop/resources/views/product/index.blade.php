<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  {{-- <div class="container">
  <h2>Product</h2>
<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Harga Produk</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Category ID</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
      <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->nama_produk}}</td>
        <td>{{$d->harga_produk}}</td>
        <td>{{$d->created_at}}</td>
        <td>{{$d->updated_at}}</td>
        <td>{{$d->category_id}}</td>
      </tr>
      @endforeach
    </tbody>
  </table> 
</div>--}}

<div class="container">
    <h2>Product</h2>
    <div class="row">
        @foreach($data as $d)
        <div class="col-md-4 col-sm-6">
            <div class="product-grid">
                <div class="product-image"> 
                    <a href="/product/{{$d->id}}"> <img class="pic-1" src="{{ asset('images'.$d->id)}}"></a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="/product/{{$d->id}}">{{$d->nama_produk}}</a></h3> <span class="price">{{$d->harga_produk}}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<hr>
</body>
</html>
