@extends('layout.conquer')
@section('content')

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
@endsection
