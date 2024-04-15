@extends('template')
@section('title','Form Produk')
@section('content')
    <h1 style="text-align:center">FORM PRODUK</h1>
    <br>
    <form method="post" action="/product">
      @csrf
      <div class="col-3">
        <label>Nama</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"" value ="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-3">
        <label>Harga</label>
        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value ="{{ old('price') }}"">
        @error('price')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection