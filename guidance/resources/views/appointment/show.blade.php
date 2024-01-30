@extends('appointment.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Date : {{ $appointments->preferred_counselor }}</h5>
        <h5 class="card-title">Time : {{ $appointments->status }}</h5>
        <h5 class="card-text">Purpose : {{ $appointments->date }}</h5>
        <h5 class="card-title">Status : {{ $appointments->time }}</h5>
        
  </div>
       
   
  </div>
</div>