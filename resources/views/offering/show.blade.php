@extends('offering.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Offering Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Offering Name : {{ $offerings->offering_name }}</h5>
        <h5 class="card-title">Description : {{ $offerings->description }}</h5>
        <h5 class="card-title">Schedule : {{ $offerings->schedule }}</h5>
        <h5 class="card-text">Duration : {{ $offerings->duration }}</h5>
  </div>
       
    </hr>
  
  </div>
</div>