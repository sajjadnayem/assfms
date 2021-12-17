@extends('master')
@section('content')
<div class="container">
    <div class="card" style="width: 30rem; margin-left:25%;">
        <div class="card-body">
          <h5 class="card-title">Donor Details</h5>
          <img class="card-img rounded mx-auto d-block" src="{{url('/uploads/volunteers/'.$volunteer->image)}}" style="border-radius: 4px;" height=300px; width= "80px;" alt="volunteer image">
          <p><b>Name: {{$volunteer->name}}</b></p>
          <p><b>Email: {{$volunteer->email}}</b></p>
          <p><b>City: {{$volunteer->city}}</b></p>
          <p><b>Address: {{$volunteer->address}}</b></p>
          <p><b>Gender: {{$volunteer->gender}}</b></p>
          <p><b>Age: {{$volunteer->age}}</b></p>
          <p><b>Occupation: {{$volunteer->occupation}}</b></p>
          <p><b>Educational Background: {{$volunteer->education}}</b></p>
          <p><b>Contact Number: {{$volunteer->phn_number}}</b></p>
        </div>
      </div>
</div>
@endsection