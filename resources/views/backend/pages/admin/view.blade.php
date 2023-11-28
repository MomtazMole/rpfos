
@extends('backend.master')
@section('content')
<div class="container m-4">
<form
 class="form-group">
    <label for="exampleFormControlInput1">User Name</label>
    <input name="user_name" value="{{$admin->name}}" type="text" class="form-control" id="" placeholder="write user name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Role</label><br>
    <select name="role" value="{{$admin->role}}" class="form-control">
      <option>Select Your Role</option>
      <option value="admin">Admin</option>
      <option value="manager">Manager</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput1">E-mail</label>
    <input name="email" value="{{$admin->email}}" type="email"class="form-control" id="" placeholder="write email">
     
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput2">Password</label>
    <input name="password" value="{{$admin->password}}" type="password"class="form-control" id="">
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput2">Upload Photo</label>
    <input name="photo" value="{{$admin->photo}}"type="file"class="form-control" id="">
    </select>
    <br>
  </div>
</form>
@endsection