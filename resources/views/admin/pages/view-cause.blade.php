@extends('master')
@section('content')
    <h2>CauseS List</h2>
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
        <table class="table table-light" style="width:100%; Text-align: Center ">
            <thead><tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Location</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Target Amount</th>
                <th scope="col">Raised Amount</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
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
                        <td>{{$item->raised_amount}}</td>
                        <td><img src="{{url('/uploads/causes/'.$item->image)}}" style="border-radius:4px" width="100px" alt="causes image"></td> 
                        <td>
                            <a href="{{route('view.cause', $item->id)}}" class="btn btn-info">View</a>
                            <a href="{{route('cause.edit', $item->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{route('delete.cause', $item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                        </tr>   
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection