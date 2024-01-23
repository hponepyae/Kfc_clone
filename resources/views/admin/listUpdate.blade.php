@extends('mainSource.main')
@section('main')
     <div class="container-sm mx-auto mt-12">
          <h1 class=" text-3xl text-red-600 text-center text-bold">Change Role Of {{$dataid->name}}</h1>
        <form action="{{route('update#role')}}"  method="POST">
            @csrf
           <div class="flex flex-column justify-center align-items-center mt-5">
             <input type="hidden" name="updateId" value="{{$dataid->id}}">
            <label for="" class="">Role</label>
            <select name="role" id="" class="form-control w-2/4 my-3 border-red-600">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>

             <button class="btn btn-danger text-dark" type="submit">Change</button>
           </div>
        </form>
        </div>
@endsection
