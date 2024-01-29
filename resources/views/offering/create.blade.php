@extends('offering.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Offering Page</div>
  <div class="card-body">
      
      <form action="{{ url('offering') }}" method="post">
        {!! csrf_field() !!}
        <label>Offering Name</label></br>
        <input type="text" name="offering_name" id="offering_name" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Schedule</label></br>
        <input type="text" name="schedule" id="schedule" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop