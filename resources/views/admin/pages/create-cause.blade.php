@extends('master')

@section('content')
<h1>Create Causes</h1>
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

<form action={{route('cause.store')}} method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="name" style="font-size:20px;"><b>Cause Name</label></b>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Cause Name">
  </div>


    <label for="type" style="font-size:20px;"><b>Select Crisis Type</label></b><br>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01"><b>Options</b></label>
      </div>
      <select class="custom-select" id="category" name="category">
        <option>Select Crisis Category</option>
        @foreach ($categorylist as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="name" style="font-size:20px;"><b>Cause Description</label></b><br>
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

    <div class="form-group">
      <label for="raised_amount" style="font-size:20px;"><b>Raised Amount</label></b>
      <input type="number" class="form-control" id="raised_amount" placeholder="Enter Target Amount" name="raised_amount">
    </div>

    <div class="mb-3">
      <label for="cause_image" class="form-label" style="font-size:20px;"><b>Insert Image</b></label>
      <input class="form-control" type="file" id="cause_image" name="cause_image">
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
  </form>
@endsection