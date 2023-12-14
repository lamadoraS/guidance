@extends('student.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>First Name</label></br>
        <input type="text" name="first_name" id="first_name" value="{{$students->first_name}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="last_name" id="last_name" value="{{$students->last_name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
        <label>Email_Address</label></br>
        <input type="text" name="email_address" id="email_address" value="{{$students->email_address}}" class="form-control"></br>
        <label>Grade Level</label></br>
        <input type="text" name="grade_level" id="grade_level" value="{{$students->grade_level}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$students->age}}" class="form-control"></br>
        <label>Purpose</label></br>
        <input type="text" name="purpose" id="purpose" value="{{$students->purpose}}" class="form-control"></br>
         <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop