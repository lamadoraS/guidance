@extends('admin.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Admin Page</div>
 
  <div class="card-body">
      
      <form action="{{ url('admin/' .$admins->id) }}" enctype="multipart/form-data" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$admins->id}}" id="id" />
        <div class="form-group">
          <label for="avatar">Avatar:</label>
          <input type="file" name="avatar" class="form-control">
      </div>
        <br>

        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$admins->name}}" class="form-control"></br>
        <label>Email Address</label></br>
        <input type="text" name="email" id="email" value="{{$admins->email}}" class="form-control"></br>
        <label>Password</label></br>
        <input type="password" name="password" id="password" value="{{$admins->password}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
         
    </form>
   
  </div>
</div>
 
@stop