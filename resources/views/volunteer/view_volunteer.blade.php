@extends('master')
@section('content')
    <table class="table table-light" style="width:100%"> 
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">City</th>
        <th scope="col">Address</th>
        <th scope="col">Gender</th>
        <th scope="col">Age</th>
        <th scope="col">Occupation</th>
        <th scope="col">Educational Background</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Crisis Type</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($volunteerlist as $key=>$item)
           <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->city}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->gender}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->occupation}}</td>
            <td>{{$item->education}}</td>
            <td>{{$item->phn_number}}</td>
            <td>{{$item->type}}</td>
            </tr> 
        @endforeach
    </tbody>
    </table>
@endsection