@extends('template')
@section('title','Login')
@section('content')
    <h1 style="text-align:center">LOGIN</h1>
    <br>
    <form method="post" action="/auth">
      @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
      {{ session('message') }}
      <!-- {{ bcrypt('123')}} -->
    </form>
@endsection