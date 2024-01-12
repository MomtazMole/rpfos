
@extends('backend.master')
@section('content')
<div class="container m-4">
<form action="{{route('Admin.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">User Name</label>
    <input name="user_name" type="text" class="form-control" id="" placeholder="write user name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Role</label><br>
    <select name="role" class="form-control">
      <option>Select Your Role</option>
      <option value="admin">Admin</option>
      <option value="manager">Manager</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput1">E-mail</label>
    <input name="email" type="email"class="form-control" id="" placeholder="write email">
     
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput1">phone</label>
    <input name="phone" type="number"class="form-control" id="" placeholder="write nmuber">
     
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput2">Password</label>
    <input name="password" type="password"class="form-control" id="">
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput2">Upload Photo</label>
    <input name="photo" type="file"class="form-control" id="">
    </select>
    <br>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection