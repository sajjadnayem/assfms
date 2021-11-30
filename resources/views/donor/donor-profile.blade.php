@extends('master')
@section('content')
<h2>Donor Profile</h2>
<a href="{{route('donor.createprofile')}}"><button class="btn btn-primary">Create Donor</button></a>
<a href="{{route('donor.viewprofile')}}"><button class="btn btn-info">View Donor</button></a>
@endsection