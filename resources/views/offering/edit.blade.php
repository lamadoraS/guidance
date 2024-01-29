@extends('offering.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('offering/' .$offerings->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$offerings->id}}" id="id" />
        <label>Offering Name</label></br>
        <input type="text" name="offering_name" id="offering_name" value="{{$offerings->offering_name}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{$offerings->description}}" class="form-control"></br>
        <label>Schedule</label></br>
        <input type="text" name="schedule" id="schedule" value="{{$offerings->schedule}}" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" value="{{$offerings->duration}}" class="form-control"></br>
         <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop