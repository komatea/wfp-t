@extends('layout.conquer')
@section('content')

<div class="container">
    <h2>Product</h2>
    <div class="row">
        @foreach($data as $d)
        <a class="btn btn-default"  href="#detail_{{$d->id}}" 
          data-toggle="modal">{{ $d->nama_produk }}</a>  
        </td>
        <div class="modal fade" id="detail_{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                   <h4 class="modal-title">{{$d->nama_produk}}</h4>
                </div>
                <div class="modal-body">
                   <img src='images/{{ $d->id }}.jpg' height='200px' />
                </div>
          <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
             </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6">
            <div class="product-grid">
                <div class="product-image"> 
                    <a href="/product/{{$d->id}}"> <img class="pic-1" src="{{url('assets/img/product/'.$d->id.'.jpg')}}" style="width:200px"></a>
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
