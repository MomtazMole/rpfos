
@extends('backend.master')
@section('content')
<div class="container m-4">
<form action="{{route('Admin.update',$admin->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
   
  <div class="form-group">
    <label for="exampleFormControlInput1">User Name</label>
    <input name="user_name" value="{{$admin->name}}" type="text" class="form-control" id="" placeholder="write user name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Role</label><br>
    <select name="role" value="{{$admin->role}}" type="text" class="form-control">
      <option>Select Your Role</option>
      <option value="admin">Admin</option>
      <option value="manager">Manager</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput3">E-mail</label>
    <input name="email" value="{{$admin->email}}" type="email"class="form-control" id="" placeholder="write email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput4">Password</label>
    <input name="password" value="{{$admin->password}}" type="password"class="form-control" id="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput5">Upload Photo</label>
    <input name="photo" value="{{$admin->photo}}" type="file"class="form-control" id="">
    <br>
  </div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection