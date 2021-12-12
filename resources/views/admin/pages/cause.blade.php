@extends('master')

@section('content')
  <h2>Manage Causes</h2>
  <a href="{{route('cause.create')}}" class="btn btn-info">Create Causes</a>
  <a href="{{route('cause.view')}}" class="btn btn-success">View Causes</a>
@endsection