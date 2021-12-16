@extends('master')
@section('content')
    <h2>View Donation</h2>
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
    <table class="table table-light" style="width: 100%">
      <thead>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Crisis Type</th>
      <th scope="col">Donation Amount</th>
      <th scope="col">Action</th>
      </thead>
      <tbody>
          @foreach($donationlist as $key=>$item)
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->phn_number}}</td>
            <td>{{$item->type}}</td>
            <td>{{$item->amount}}</td>
            <td>
              <a href="{{route('view.donation', $item->id)}}" class="btn btn-info">View</a>
              <a href="" class="btn btn-success">Update</a>
              <a href="{{route('delete.donation', $item->id)}}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
  </table>
   </div>
@endsection