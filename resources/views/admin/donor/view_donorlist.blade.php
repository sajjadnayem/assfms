@extends('master')
@section('content')
    <h2>View All Registered Donors</h2>
    <hr>
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
    <div style="overflow-x: scroll;">
    <table class="table table-light" style="width:100%; Text-align: Center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Gender</th>
                <th scope="col">Occupation</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
        </thead>
        <tbody>
        @foreach($userlist as $key=>$item)
        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->address}}</td>
          <td>{{$item->city}}</td>
          <td>{{$item->phn_number}}</td>
          <td>{{$item->gender}}</td>
          <td>{{$item->occupation}}</td>
          <td><img src="{{url('/uploads/donors/'.$item->image)}}" style="border-radius: 4px;" width= "100px;" alt="donor image"> </td>
          <td>
            <a href="{{route('view.donor',$item->id)}}" class="btn btn-info">View</a>
            <a href="" class="btn btn-success">Update</a>
            <a href="{{route('delete.donorprofile', $item->id)}}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    
  </div>
@endsection