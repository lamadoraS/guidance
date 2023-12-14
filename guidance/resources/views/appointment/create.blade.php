@extends('appointment.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Appointment Page</div>
  <div class="card-body">
      
      <form action="{{ url('appointment') }}" method="post">
        {!! csrf_field() !!}
        <label>Date</label></br>
        <input type="text" name="date" id="date" class="form-control"></br>
        <label>Time </label></br>
        <input type="text" name="time" id="time" class="form-control"></br>
        <label>Purpose</label></br>
        <input type="text" name="purpose" id="purpose" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop