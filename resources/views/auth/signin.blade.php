@section('title',"Sign In")

@extends('/layout/header')
<link rel="stylesheet" href="{{ url('css/homepage.css') }}"> 
@section('content')
<div class="flexbox-container">
  <div class="flexbox-item flexbox-item-1"><img src="https://clipart.world/wp-content/uploads/2020/11/Earth-clipart-transparent.png"></div>
  <div class="flexbox-item flexbox-item-2 shadow mb-5 bg-white rounded">
    <h2> Sign In </h2>
    <form method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> </div>
 
          {{-- <form method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form> --}}
         
     </div>
     @endsection
 