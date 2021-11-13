@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
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
    <div class="container">
        <h1>Create Crisis</h1>
        <hr>
        <div class="form-group">
            <label for="name"><b>Crisis Name</b></label>
            <input type="text" class="form-control" id="name" placeholder="Enter Crisis Name">
          </div>
          <div class="form-group">
            <label for="name"><b>Crisis Type</b></label>
            <input type="text" class="form-control" id="name" placeholder="Enter Crisis Type">
          </div>
          <div class="form-check">
            <label for="name"><b>Amount</b></label>
            <input type="text" class="form-control" id="name" placeholder="Amount">
          </div>
          <button type="submit" class="btn btn-primary submitbtn"><a href=""></a>Submit</button>
        </form>
    </div>
</body>
</html>
@endsection