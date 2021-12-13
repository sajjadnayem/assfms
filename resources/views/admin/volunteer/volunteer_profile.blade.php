@extends('master')
@section('content')
    <h2>Volunteer Profile</h2>
    <hr>
    <a href="{{route('create.volunteer')}}"><button class="btn btn-info">Create Volunteer</button></a>
    <a href="{{route('view.volunteer')}}"><button class="btn btn-success">View Volunteer</button></a>
@endsection