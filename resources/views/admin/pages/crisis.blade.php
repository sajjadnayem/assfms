@extends('master')

@section('content')
    <h2>Manage Crisis</h2>
  <a href="{{route('crisis.create')}}" class="btn btn-primary">Create crisis</a>
  <a href="{{route('crisis.view')}}" class="btn btn-primary">View Crisis</a>
@endsection