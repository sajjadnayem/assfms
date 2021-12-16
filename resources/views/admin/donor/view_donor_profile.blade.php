@extends('master')
@section('content')
    <div class="container">
        <div class="card" style="width: 30rem; margin-left:25%;">
            <div class="card-body">
              <h5 class="card-title">Donor Details</h5>
              <img class="card-img rounded mx-auto d-block" src="{{url('/uploads/donors/'.$donor->image)}}" style="border-radius: 4px;" height=300px; width= "80px;" alt="donor image">
              <p><b>Name: {{$donor->name}} </b></p>
              <p><b>Email: {{$donor->email}}</b></p>
              <p><b>Address:{{$donor->address}} </b></p>
              <p><b>City: {{$donor->city}}</b></p>
              <p><b>Contact Number: {{$donor->phn_number}}</b></p>
              <p><b>Gender: {{$donor->gender}}</b></p>
              <p><b>Occupation: {{$donor->occupation}}</b></p>
            </div>
          </div>
    </div>
@endsection