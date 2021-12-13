@extends('master')
@section('content')
    <h2>Create Donation</h2>
    <a href="{{route('donor.createdonation')}}"><button class="btn btn-primary">Create Donation</button></a>
    <a href="{{route('donor.viewdonation')}}"><button class="btn btn-primary">View Donation</button></a>
@endsection