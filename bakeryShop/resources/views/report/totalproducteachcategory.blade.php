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
  <h2>Product</h2>
<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Kategori</th>
        <th>Jumlah Produk</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
      <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->nama_kategori}}</td>
        <td>{{$d->jumlah}}</td>
      </tr>
      @endforeach
    </tbody>
  </table> 
</div>

<hr>
</body>
</html>
