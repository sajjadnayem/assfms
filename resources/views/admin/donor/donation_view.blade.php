@extends('master')
@section('content')
<div class="container">
    <div class="card" style="width: 30rem; margin-left:25%;">
        <div class="card-body">
          <h5 class="card-title">Donation Details</h5>
          <p><b>Name: {{$donation->name}}</b></p>
          <p><b>Email: {{$donation->email}}</b></p>
          <p><b>Address: {{$donation->address}}</b></p>
          <p><b>Contact Number: {{$donation->phn_number}}</b></p>
          <p><b>Cause Type: {{$donation->type}}</b></p>
          <p><b>Donation Amount: {{$donation->amount}}<b></p>
        </div>
      </div>
</div>
@endsection