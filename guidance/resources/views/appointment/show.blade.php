@extends('appointment.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Date : {{ $appointments->date }}</h5>
        <h5 class="card-title">Time : {{ $appointments->time }}</h5>
        <h5 class="card-text">Purpose : {{ $appointments->purpose }}</h5>
        <h5 class="card-title">Status : {{ $appointments->status }}</h5>
        
  </div>
       
    </hr>
  
  </div>
</div>