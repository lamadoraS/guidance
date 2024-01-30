@extends('admin.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="form-group">
    <label for="avatar">Avatar:</label>
    <input type="file" name="avatar" class="form-control">
</div>
  <div class="card-body">
      
      <form action="{{ url('admin/' .$admins->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$admins->id}}" id="id" />
        <label for="role">Role</label><br>
<select name="role" id="role" class="form-control">
    <option value="admin" @if($admins->role == 'admin') selected @endif>Admin</option>
    <option value="student" @if($admins->role == 'student') selected @endif>Student</option>
</select><br>

        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$admins->name}}" class="form-control"></br>
        <label>Email Address</label></br>
        <input type="text" name="email" id="email" value="{{$admins->email}}" class="form-control"></br>
         <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop