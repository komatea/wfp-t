<!DOCTYPE html>
<html lang="en">
<head>
    <title>DETAIL PRODUCT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="container">
        <h2>Product Detail</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Hasil</th>
                </tr>
                
            </thead>
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{$data->id}}</td> </tr>
                </tr>
                <tr>
                    <th>Nama Produk</th>
                    <td>{{$data->nama_produk}}</td> </tr>
                </tr>
                <tr>
                    <th>Harga Produk</th>
                    <td>{{$data->harga_produk}}</td> </tr>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{$data->created_at}}</td> </tr>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{$data->updated_at}}</td> </tr>
                </tr>
                <tr>
                    <th>Nama Category</th>
                    <td>{{$data->category->nama_kategori}}</td> </tr>
                </tr>
            </tbody>
        </table> 
    </div>
    
    {{-- <div class="container">
        <h2>Product</h2>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="product-grid">
                    <div class="product-image"> 
                        <a href="/product/{{$data->id}}"> <img class="pic-1" src="{{ asset('images'.$data->id)}}"></a>
                    </div>
                    <div class="product-content">
                        
                        <h3 class="title">
                            <a href="/product/{{$data->id}}">{{$data->nama_produk}}</a></h3> 
                            <p>{{$data->category->nama_kategori}}</p>
                            <span class="price">{{$data->harga_produk}}</span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <hr>
    </body>
    </html>
    