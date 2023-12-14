@extends('appointment.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('appointment/' .$appointments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$appointments->id}}" id="id" />
        <label>Date</label></br>
        <input type="text" name="date" id="date" value="{{$appointments->date}}" class="form-control"></br>
        <label>Time</label></br>
        <input type="text" name="time" id="time" value="{{$appointments->time}}" class="form-control"></br>
        <label>Purpose</label></br>
        <input type="text" name="purpose" id="purpose" value="{{$appointments->purpose}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$appointments->status}}" class="form-control"></br>
         <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop