@extends('website.master')
@section('content')

<style>
    .container{
        box-sizing: border-box;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
        font-family: Arial, Helvetica, sans-serif;
        width: 30rem;
    }
    .btn{
        margin-bottom: 10px;
    }
    .card-img{
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }
</style>
    <div class="container">
        <h2>Cause Details</h2>
        <img class="card-img rounded mx-auto d-block" src="{{url('/uploads/causes/'. $cause->image)}}" style="border-radius: 4px;" height=300px; width= "80px;" alt="causes image">
          <p><b>Cause Name: {{$cause->name}}</b></p>
          <p><b>Category: {{optional($cause->category)->name}}</b></p>
          <p><b>Description: {{$cause->details}}</b></p>
          <p><b>Location: {{$cause->location}}</b></p>
          <p><b>Contact Number: {{$cause->phn_number}}</b></p>
          <p><b>Target Amount: {{$cause->amount}}</b></p>
          <a href="" class="btn btn-primary">Donate Now</a>
    </div>
@endsection
{{-- class="card-img rounded mx-auto d-block" --}}