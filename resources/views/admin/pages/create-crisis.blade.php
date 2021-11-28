@extends('master')

@section('content')
<h1>Create Crisis</h1>
<hr>

@if (session()->has('success'))
<p class="alert alert-success">
  {{session()->get('success')}}
  </p>    
@endif

@if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>
            {{$error}}
          </li>   
        @endforeach
      </ul>
    </div>
  @endif
<form action={{route('crisis.store')}} method="POST">
  @csrf
    <div class="form-group">
      <label for="name" style="font-size:20px;"><b>Crisis Name</label></b>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Crisis Name">
    </div>


    <label for="type" style="font-size:20px;"><b>Select Crisis Type</label></b><br>

    <div class="input-group mb-3">
      
      <div class="input-group-prepend">
        
        <label class="input-group-text" for="inputGroupSelect01"><b>Options</b></label>
      </div>

      <select class="custom-select" id="type" name="type">
        <option selected>Choose...</option>
        <option value="food">Food</option>
        <option value="flood">Flood</option>
        <option value="medical">Medical</option>
        <option value="other">Others</option>
      </select>
    </div>

    <div class="form-group">
      <label for="name" style="font-size:20px;"><b>Crisis Description</label></b><br>
      <textarea id="details" class="form-control" name="details" rows="3" cols="50">
      
        </textarea>
     
      
    </div>

    <div class="form-group">
      <label for="location" style="font-size:20px;"><b>Location</label></b>
      <input type="text" class="form-control" id="location"  placeholder="Enter Location" name="location">
    </div>

    <div class="form-group">
      <label for="phn_number" style="font-size:20px;"><b>Contact Number</label></b>
      <input type="number" class="form-control" id="phn_number"  placeholder="Enter Contact Number" name="phn_number">
    </div>

    
    <div class="form-group">
      <label for="amount" style="font-size:20px;"><b>Target Amount</label></b>
      <input type="number" class="form-control" id="amount" placeholder="Enter Target Amount" name="amount">
    </div>

    
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
@endsection