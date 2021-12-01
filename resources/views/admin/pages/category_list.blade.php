@extends('master')
@section('content')
    <h2>Category</h2>
    <a href="{{route('create.category')}}"><button type="button" class="btn btn-info">Create Category</button></a><br>
    
    <table class="table table-light" style="width: 100%">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorylist as $key=>$category)
            <tr>
              <th scope="row">{{$key+1}}</th>
              <td>{{$category->name}}</td>   
              <td>{{$category->details}}</td>
            
            </tr>
            @endforeach
          </tbody>
    </table>
@endsection