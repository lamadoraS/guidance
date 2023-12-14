@extends('counselor.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Counselor Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">First Name : {{ $counselors->first_name }}</h5>
        <h5 class="card-title">Last Name : {{ $counselors->last_name }}</h5>
        <h5 class="card-text">Contact Number : {{ $counselors->contact_number }}</h5>
        <h5 class="card-title">Email Address : {{ $counselors->email_address }}</h5>
        <h5 class="card-title">Specialization : {{ $counselors->specialization }}</h5>
        <h5 class="card-text">Office Location : {{ $counselors->pffice_location }}</h5>
        
  </div>
       
    </hr>
  
  </div>
</div>