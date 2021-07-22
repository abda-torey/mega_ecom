@extends('master')
@section("content")
<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
    <form action="register" method="POST">
  <div class="mb-3">
    @csrf
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <br><br>
  <button type="submit" class="btn btn-primary">Register</button>
</form>

    </div>
</div>

@endsection