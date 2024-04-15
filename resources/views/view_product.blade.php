@extends('template')
@section('title','Daftar Produk')
@section('content')
    <div class="row justify-content-center">
        <div>
            <a href="/logout" class="btn btn-secondary">Logout</a>
        </div>
        <div class="col-md-4">
            <h1 class="text-content">{{ $title }}</h1>
            <div>
                <a href="/product/create" class="btn btn-success">Tambah Produk</a>
            </div>
            {{ session('message') }}
            <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Varian</th>
                    <th>Aksi</th>
                </tr>
                @php $i = 1 @endphp
                @foreach($data as $d)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->price }}</td>
                    <td>
                        <ul>
                            @foreach($d->variants as $v)
                                <li>{{ $v->name }}</li>
                                {{ $v->stock }}
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <a class="btn btn-warning">Edit</a>
                        <a class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection