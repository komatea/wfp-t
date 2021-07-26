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

  <div class="container">
  <h2>Product dengan katergori: {{$category_name}}</h2>
  <p>Data ditemukan berjumlah {{count($result)}} dari {{$getTotalData}}</p>
<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Harga Produk</th>
        <th>Kategori</th>
      </tr>
    </thead>
    <tbody>
        @foreach($result as $d)
      <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->nama_produk}}</td>
        <td>{{$d->harga_produk}}</td>
        <td>{{$d->category->nama_kategori}}</td>
      </tr>
      @endforeach
    </tbody>
  </table> 
</div>

<hr>
</body>
</html>
