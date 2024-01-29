@extends('admin.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Admin Page</div>
  <div class="card-body">
      
      <form action="{{ url('admin') }}" method="post">
        {!! csrf_field() !!}
        <label for="role">Role</label><br>
<select name="role" id="role" class="form-control">
    <option value="admin">Admin</option>
    <option value="student">Student</option>
</select><br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email </label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Password </label></br>
        <input type="text" name="password" id="password" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop