

@extends('mainSource.main')
@section('main')
 <div class=" flex flex-column justify-center align-items-center">
            <img src="{{asset('photo/registerLogo.jpg')}}" alt="" class=" w-3/4 xl:w-1/4 mb-10 mt-16">
         <form action="{{route('register')}}" method="POST" class="mb-10 form-control w-3/4 xl:w-1/4 p-4 border-red-600">
    @csrf

 <div class="my-3">
        <label for="" class=" text-red-600 mb-2">Name</label> <br>
  <input type="text" name="name" class=" form-control border-red-600">
  @error('name')
     <span class=" text-danger"> **{{$message}}</span>
  @enderror
</div>


    <div class="my-3">
        <label for="" class=" text-red-600 mb-2">Email</label> <br>
  <input type="text" name="email" class=" form-control border-red-600">
  @error('email')
     <span class=" text-danger"> **{{$message}}</span>
  @enderror
</div>

      <div class="my-3">
        <label for="" class=" text-red-600 mb-2">Phone</label> <br>
  <input type="text" name="phone" class=" form-control border-red-600">
  @error('phone')
     <span class=" text-danger"> **{{$message}}</span>
  @enderror
</div>

       <div class="my-3">
        <label for="" class=" text-red-600 mb-2">Address</label> <br>
  <input type="text" name="address" class=" form-control border-red-600">
  @error('address')
     <span class=" text-danger"> **{{$message}}</span>
  @enderror
</div>

 <div class="my-3">
        <label for="" class=" text-red-600 mb-2">Role</label> <br>
  <select name="role" id="" class=" form-control border-red-600">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
  @error('role')
     <span class=" text-danger"> **{{$message}}</span>
  @enderror
</div>


<div class="my-3">
    <label for="" class=" text-red-600 mb-2">Password</label> <br>
 <input type="password" name="password" class=" form-control border-red-600">
  @error('password')
     <span class=" text-danger"> **{{$message}}</span>
  @enderror
</div>

<div class="my-3">
    <label for="" class=" text-red-600 mb-2">Confirm Password</label> <br>
 <input type="password" name="password_confirmation" class=" form-control border-red-600">
  @error('password_confirmation')
     <span class=" text-danger"> **{{$message}}</span>
  @enderror
</div>

<div class=" flex justify-center mt-8">
     <input type="submit" class=" btn btn-outline-danger">
</div>

<p class=" mt-4 text-danger text-xs xl:text-sm text-center">You've Account <a href="{{route('user#login')}}" class=" text-primary ms-1 underline"> Login Here!</a></p>
</form>
     </div>
@endsection
