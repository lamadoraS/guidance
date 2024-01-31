@extends('counselor.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('counselor/' .$counselors->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$counselors->id}}" id="id" />
        <label>First Name</label></br>
        <input type="text" name="first_name" id="first_name" value="{{$counselors->first_name}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="last_name" id="last_name" value="{{$counselors->last_name}}" class="form-control"></br>
        <label>Email_Address</label></br>
        <input type="text" name="email_address" id="email_address" value="{{$counselors->email_address}}" class="form-control"></br>
        <label>Specialization</label></br>
        <input type="text" name="specialization" id="specialization" value="{{$counselors->specialization}}" class="form-control"></br>
        <label>Office Location</label></br>
        <input type="text" name="office_location" id="office_location" value="{{$counselors->office_location}}" class="form-control"></br>
         <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop