@extends('appointment.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Appointment Page</div>
  <div class="card-body">
      
      <form action="{{ url('appointment') }}" method="post">
        {!! csrf_field() !!}
        <label>Preferred Counselor</label></br>
        <input type="text" name="preferred_counselor" id="preferred_counselor" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <label>Date</label></br>
        <input type="date" name="date" id="date" class="form-control"></br>
        <label>Time </label></br>
        <input type="text" name="time" id="time" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop