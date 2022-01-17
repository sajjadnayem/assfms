@extends('master')
@section('content')
<h2>View All Registered Volunteer</h2>
@if(session()->has('success'))
<p class="alert alert-success">
  {{session()->get('success')}}
</p>
@endif

@if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>
                  {{$error}}
                </li>   
              @endforeach
            </ul>
          </div>
@endif
<hr>
    <div style="overflow-x: scroll">
      <table class="table table-hover table-light" style="width: 100%; Text-align: Center"> 
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
            <th scope="col">Image</th>
            <th scope="col">Action</th>
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
                <td><img src="{{url('/uploads/volunteers/'.$item->image)}}" style="border-radius:4px" width="100px" alt="volunteer image"></td>
                <td>
                  <a href="{{route('volunteer.view', $item->id)}}" class="btn btn-info">View</a>
                  <a href="" class="btn btn-success">Update</a>
                  <a href="{{route('delete.volunteer', $item->id)}}" class="btn btn-danger">Delete</a>
                </td>
                </tr> 
            @endforeach
        </tbody>
        </table>
    </div>
@endsection