@extends('layout.conquer')
@section('content')
    <div class="container">
        <h2>Category</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th>Products</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->nama_kategori }}</td>
                        <td>
                            @foreach ($d->products as $p)
                                {{ $p->nama_produk }} ({{ $p->harga_produk }}) &nbsp;&nbsp;
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
