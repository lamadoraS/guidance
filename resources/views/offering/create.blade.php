@extends('offering.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Offering Page</div>
  <div class="card-body">
      
      <form action="{{ url('offering') }}" method="post">
        {!! csrf_field() !!}
        <label>Offering Name</label></br>
        <input type="text" name="offering_name" id="offering_name" class="form-control"></br>
        <label>Specialty Offered</label></br>
        <input type="text" name="specialty_offered" id="specialty_offered" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop