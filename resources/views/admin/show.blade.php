@extends('admin.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Admin Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Role : {{ $admins->role }}</h5>
        <h5 class="card-title">Name : {{ $admins->name }}</h5>
        <h5 class="card-title">Email : {{ $admins->email }}</h5>
       
        
  </div>
       
  
  
  </div>
</div>