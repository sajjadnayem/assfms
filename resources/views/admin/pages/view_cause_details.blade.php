@extends('master')
@section('content')
<div class="container">
    <div class="card" style="width: 30rem; margin-left:25%;">
        <div class="card-body">
          <h5 class="card-title">Cause Details</h5>
          <img class="card-img rounded mx-auto d-block" src="{{url('/uploads/causes/'. $cause->image)}}" style="border-radius: 4px;" height=300px; width= "80px;" alt="causes image">
          <p><b>Cause Name: {{$cause->name}}</b></p>
          <p><b>Category: {{optional($cause->category)->name}}</b></p>
          <p><b>Description: {{$cause->details}}</b></p>
          <p><b>Location: {{$cause->location}}</b></p>
          <p><b>Contact Number: {{$cause->phn_number}}</b></p>
          <p><b>Target Amount: {{$cause->amount}}<b></p>
          <p><b>Raised Amount: {{$cause->raised_amount}}</b></p>
        </div>
      </div>
</div>
@endsection