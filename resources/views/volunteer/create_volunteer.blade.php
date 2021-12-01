@extends('master')
@section('content')
    <h1>Volunteer Registration Form</h1>
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
  <form action="{{route('store.volunteer')}}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        <label for="name" style="font-size:20px;"><b>Full Name</b></label>
        <input type="text" class="form-control" id="name"  placeholder="Enter Full Name" name="name">
       
      </div>
      <div class="form-group">
        <label for="email" style="font-size:20px;"><b>Email Address</label></b>
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
        <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>

      <div class="form-group">
          <label for="city" style="font-size:20px;"><b>City</label></b>
          <input type="text" class="form-control" id="city"  placeholder="Enter City" name="city">
        </div>

      <div class="form-group">
        <label for="address" style="font-size:20px;"><b>Address</label></b>
        <input type="text" class="form-control" id="address"  placeholder="Enter Address" name="address">
      </div>

      <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0" style="font-size:20px;" name="gender"><b>Gender</legend></b>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
              <label class="form-check-label" for="gender">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
              <label class="form-check-label" for="gender">
                Female
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="gender" value="others">
              <label class="form-check-label" for="gender">
                Others
              </label>
            </div>
          </div>
        </fieldset>

      <div class="form-group">
          <label for="age" style="font-size:20px;"><b>Age</label></b>
          <input type="number" class="form-control" id="age"  placeholder="Enter Age" name="age">
        </div>

        <div class="form-group">
          <label for="occupation" style="font-size:20px;"><b>Occupation</label></b>
          <input type="text" class="form-control" id="occupation"  placeholder="Enter Occupation" name="occupation">
        </div>

        <div class="form-group">
          <label for="education" style="font-size:20px;"><b>Educational Background</label></b>
          <input type="text" class="form-control" id="education"  placeholder="Enter Educational Background" name="education">
        </div>



      <div class="form-group">
        <label for="phn_number" style="font-size:20px;"><b>Phone Number</label></b>
        <input type="number" class="form-control" id="phn_number"  placeholder="Enter Phone Number" name="phn_number">
      </div>


      <div class="form-group">
        <label for="type" style="font-size:20px;"><b>Assigned Crisis Type</label></b><br>
        <select name="category" class="form-control">
          <option>Available Crises</option>
          @foreach ($categorylist as $item)
          <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
        </select>
      </div>


      
  {{-- <label for="type" style="font-size:20px;"><b>Available Crisises</label></b><br>

  <div class="input-group mb-3">
    
    <div class="input-group-prepend">
      
      <label class="input-group-text" for="inputGroupSelect01">Options</label>
    </div>

    <select class="custom-select" id="type" name="type">
      <option selected>Choose...</option>
      <option value="food">Food</option>
      <option value="flood">Flood</option>
      <option value="medical">Medical</option>
      <option value="other">Others</option>
    </select>
  </div> --}}

  <div class="mb-3">
      <label for="volunteer_image" class="form-label" style="font-size:20px;"><b>Insert Image</b></label>
      <input class="form-control" type="file" id="volunteer_image" name="volunteer_image">
    </div>

    {{-- <div class="form-group">
      <label for="password"><b>Password</label></b>
      <input type="text" class="form-control" id="password"  placeholder="Enter Password">
     
    </div> --}}


         
    <button type="submit" class="btn btn-success">Register</button>
    
    <div class="form-group">
        <p><b>Already have an account? </b><a href="#"><button type="submit" class="btn btn-info">Sign In</button></a>.</p>
      </div>

</form> 
@endsection
