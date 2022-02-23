@extends('layout/header')
@section('title',"About")

@section('content')
<!-- Button trigger modal -->

  
  <!-- Modal -->
<!-- Large modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add A Guitar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action={{ route('guitars.store') }}>
                @csrf
                <div class="form-group">
                  <label for="guitar-name">Name</label>
                  <input type="text" class="form-control" id="guitar-name" value="{{ old('guitar-name') }}" name="guitar-name" aria-describedby="emailHelp" placeholder="Enter name">
                  @error('guitar-name')
                    <div class="form-error">
                    {{ $message }}
                    @enderror
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" id="guitar_brand" name="brand" value="{{ old('brand') }}" aria-describedby="emailHelp" placeholder="Enter guitar brand">
                    @error('brand')
                    <div class="form-error">
                    {{ $message }}
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="year-made">Year Made</label>
                    <input type="text" class="form-control" id="year_made" name="year-made" value="{{ old('year-made') }}" aria-describedby="emailHelp" placeholder="Enter guitar year">
                    @error('year-made')
                    <div class="form-error">
                    {{ $message }}
                    @enderror
                  </div>
               
              
        </div>
        <div class="modal-footer">
            <button type="submit"  class="btn btn-primary">Save</a>
        </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
           
          </div>
  </div>
</div>
</div>
  
<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">CRUD Website</h1>
          <p class="lead text-muted">CRUD Website using Laravel + MySQL + Bootstrap CSS Framework</p>
          <p>
            <a href="https://github.com/emiyash1rou/laravel_crud" class="btn btn-primary my-2">Github Source Code</a>
            
          </p>
        </div>
      </section>
      <div class="container">

        <div class="row">
          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22208%22%20height%3D%22226%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20208%20226%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17f2457f1a9%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17f2457f1a9%22%3E%3Crect%20width%3D%22208%22%20height%3D%22226%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2266.93124771118164%22%20y%3D%22118.04000034332276%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
              <div class="card-body">
                <p class="card-text">Add a Guitar Item</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add A Guitar</button>
                
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
         
                </div>
            
        </div>
        <main role="main" class="container">
           <!-- /.blog-post -->
           @if (count($guitars)>0)
    

<table class="table">
    <tr>
        <th scope="col">Guitar</th>
        <th scope="col">brand</th>
        <th scope="col">Year</th>
        <th scope="col">Actions</th>
    </tr>


@foreach ($guitars as $guitar)

    <tr>
      <td> {{ $guitar['name'] }} </td>
      <td> {{ $guitar['brand'] }} </td>
      <td> {{ $guitar['year_made'] }} </td>
     <td> <a href="{{ route('guitars.edit',['guitar' => $guitar['id'] ]) }}" class="btn btn-sm btn-outline-primary">Update Data</a> 
      <form action="{{ route('guitars.destroy',['guitar' => $guitar['id'] ]) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-outline-danger" type="submit">Delete</button> </td>
     {{-- <a href="{{ route('guitars.destroy',['guitar' => $guitar['id'] ]) }}" class="btn btn-sm btn-outline-danger">Delete Data</a> </td> --}}
    </tr>

@endforeach
@else
<h1> No record currently</h1>
@endif

          
                  

@endsection