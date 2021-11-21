@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    .submitbtn{
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    opacity: 0.9;
    }
</style>
<body>
  <form action={{route('crisis.store')}} method="POST">
    @csrf
    <div class="container">
        <h1>Create Crisis</h1>
        <hr>
        <div class="form-group">
            <label for="name"><b>Crisis Name</b></label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter Crisis Name">
          </div>
          {{-- <div class="form-group">
            <label for="name"><b>Crisis Type</b></label>
            <input type="text" class="form-control" id="name" placeholder="Enter Crisis Type">
          </div> --}}
          <div class="form-group">
            <label for="type" placeholder="Select Crisis Type"><b>Crisis Type</b></label>
            <select name="type" class="form-control form-select" id="type">
              <option value="">Select Crisis Type</option>
              <option value="food">Food</option>
              <option value="flood">Flood</option>
              <option value="health">Health</option>
            </select>
          </div>
          <div class="form-group">
            <label for="name"><b>Amount</b></label>
            <input name="amount" type="number" class="form-control" id="amount" placeholder="Amount">
          </div>
          <button type="submit" class="btn btn-primary submitbtn"><a href=""></a>Submit</button>
        </form>
    </div>
</body>
</html>
@endsection