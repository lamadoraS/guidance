@extends('counselor.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Counselor Page</div>
  <div class="card-body">
      
      <form action="{{ url('counselor') }}" method="post">
        {!! csrf_field() !!}
        <label>First Name</label></br>
        <input type="text" name="first_name" id="first_name" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="last_name" id="last_name" class="form-control"></br>
        <label>Email Address</label></br>
        <input type="text" name="email_address" id="email_address" class="form-control"></br>
        <label>Specialization</label></br>
        <input type="text" name="specialization" id="specialization" class="form-control"></br>
        <label>Office Location</label></br>
        <input type="text" name="office_location" id="office_location" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop