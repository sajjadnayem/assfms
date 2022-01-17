@extends('master')
@section('content')

<style>
  .card{
    box-shadow: 10px #f7f7f7;
    width: 30rem; 
    margin-left:25%;
    /* position: absolute; */
    box-sizing: border-box;
  }
  p{
    font-family: Bangla468, Nunito, sans-serif;
  }
  .card-title{
    font-family: Bangla468, Nunito, sans-serif;
    text-align: center;
  }
  .card-img{
    margin-bottom: 20px;
  }
</style>
<div id="CauseToPrint">
  <div class="container">
    <div class="card" style="">
        <div class="card-body">
          <h5 class="card-title">Cause Details</h5>
          <img class="card-img rounded mx-auto d-block" src="{{url('/uploads/causes/'. $cause->image)}}" style="border-radius: 4px;" height=300px; width= "80px;" alt="causes image">
          <p><b>Cause Name: {{$cause->name}}</b></p>
          <p><b>Category: {{optional($cause->category)->name}}</b></p>
          <p><b>Description: {{$cause->details}}</b></p>
          <p><b>Location: {{$cause->location}}</b></p>
          <p><b>Contact Number: {{$cause->phn_number}}</b></p>
          <p><b>Target Amount: {{$cause->amount}}</b></p>
          <p><b>Raised Amount: {{$cause->raised_amount}}</b></p>
        </div>
      </div>
</div>
<button class="btn btn-primary" type="submit" onClick="PrintDiv('CauseToPrint');" value="Print">Print</button>
</div>
@endsection

{{-- js script for printin --}}
<script language="javascript">
  function PrintDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
  }
  </script>