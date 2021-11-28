@extends('master')


@section('content')

<form>
    <div class="form-group">
      <label for="name" style="font-size:20px;"><b>Full Name</label></b>
      <input type="text" class="form-control" id="name"  placeholder="Enter Full Name" name="name">
    </div>

    <div class="form-group">
      <label for="email" style="font-size:20px;"><b>Email Address</label></b>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
      <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="address" style="font-size:20px;"><b>Address</label></b>
      <input type="text" class="form-control" id="address"  placeholder="Enter Address" name="address">
    </div>

    <div class="form-group">
      <label for="phn_number" style="font-size:20px;"><b>Phone Number</label></b>
      <input type="number" class="form-control" id="phn_number"  placeholder="Enter Phone Number" name="phn_number">
    </div>

    
    <label for="type" style="font-size:20px;"><b>Select Crisis Type</label></b><br>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01"><b>Options</b></label>
      </div>

      <select class="custom-select" id="type" name="type">
        <option>Choose...</option>
        <option value="food">Food</option>
        <option value="flood">Flood</option>
        <option value="medical">Medical</option>
        <option value="other">Others</option>
      </select>
    </div>

    <div class="form-group">
      <label for="amount" style="font-size:20px;"><b>Donation Amount</label></b>
      <input type="number" class="form-control" id="amount"  placeholder="Enter Donation amount" name="amount">
    </div>  

    <button type="submit" class="btn btn-success">Donate</button>
  


</form> 

@endsection
