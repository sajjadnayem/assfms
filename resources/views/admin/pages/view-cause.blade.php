@extends('master')
@section('content')
    <h2>CauseS List</h2>
    <table class="table table-light" style="width:100%">
        <thead><tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Location</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Target Amount</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($causeslist as $key=>$item)
                    <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{optional($item->category)->name}}</td>
                    <td>{{$item->details}}</td>
                    <td>{{$item->location}}</td>
                    <td>{{$item->phn_number}}</td>
                    <td>{{$item->amount}}</td>
                    <td><img src="{{url('/uploads/causes/'.$item->image)}}" style="border-radius:4px" width="100px" alt="causes image"></td> 
                    </tr>   
                @endforeach
            </tr>
        </tbody>
    </table>
@endsection