@extends('layout.conquer')
@section('content')
    <div class="container">
        <h2>Supplier</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Supplier</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->address}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
