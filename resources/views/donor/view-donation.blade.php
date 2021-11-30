@extends('master')
@section('content')
    <h2>View Donation</h2>
    <table class=" table table-light" style="width: 100%">
        <thead>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Crisis Type</th>
        <th scope="col">Donation Amount</th>
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
              
            </tr>
            @endforeach
          </tbody>
    </table>
@endsection