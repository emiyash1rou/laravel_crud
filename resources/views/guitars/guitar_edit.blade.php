@extends('layout/header')
@section('title',"Update")

@section('content')
<h2> Update Data</h2>
<form method="POST" action={{ route('guitars.update',['guitar'=> $guitars['id']])}}>
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="guitar-name">Name</label>
      <input type="text" class="form-control" id="guitar-name" value="{{ $guitars['name'] }}" name="guitar-name" aria-describedby="emailHelp" placeholder="Enter name">
      @error('guitar-name')
        <div class="form-error">
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="brand">Brand</label>
        <input type="text" class="form-control" id="guitar_brand" name="brand" value="{{  $guitars['brand'] }}" aria-describedby="emailHelp" placeholder="Enter guitar brand">
        @error('brand')
        <div class="form-error">
        {{ $message }}
        @enderror
      </div>
      <div class="form-group">
        <label for="year-made">Year Made</label>
        <input type="text" class="form-control" id="year_made" name="year-made" value="{{  $guitars['year_made'] }}" aria-describedby="emailHelp" placeholder="Enter guitar year">
        @error('year-made')
        <div class="form-error">
        {{ $message }}
        @enderror
      </div>
   <br>
      <button type="submit"  class="btn btn-primary">Update</a>
      </form>
</div>


@endsection