@extends('master')
@section('content')
    <h2>Create New Crisis Category</h2>
    <hr>
    @if(session()->has('success'))
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
    <form action="{{route('store.category')}}" method="POST"> 
        @csrf
            <div class="form-group">
              <label for="name" style="font-size:20px;"><b>Category Name</label></b>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Catagory Name">
            </div>
      
        
                <div class="form-group">
                  <label for="name" style="font-size:20px;"><b>Category Details</label></b>
                  <input type="text" class="form-control" id="details" name="details" placeholder="Enter Category Details">
                  </div>
            <button type="submit" class="btn btn-success">Submit</button>
            
    </form>
@endsection