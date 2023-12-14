@extends('student.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">First Name : {{ $students->first_name }}</h5>
        <h5 class="card-title">Last Name : {{ $students->last_name }}</h5>
        <h5 class="card-text">Address : {{ $students->address }}</h5>
        <h5 class="card-title">Email Address : {{ $students->email_address }}</h5>
        <h5 class="card-title">Grade Level : {{ $students->grade_level }}</h5>
        <h5 class="card-text">Age : {{ $students->age }}</h5>
        <h5 class="card-text">Purpose : {{ $students->purpose }}</h5>
  </div>
       
    </hr>
  
  </div>
</div>