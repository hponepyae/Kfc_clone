@extends('admin.adminMain')
@section('adminHome')



    <h1 class=" text-red-600 text-center font-bold mt-6 text-3xl">Admin & User List </h1>
    <div class=" p-3 mt-5">
      <table class="table rounded-sm">
  <thead>
    <tr >
      <th scope=" xl:col" class=" text-red-600">ID</th>
      <th scope=" xl:col" class=" text-red-600">Name</th>
      <th scope=" xl:col" class=" text-red-600">Email</th>
      <th scope=" xl:col" class=" text-red-600">Role</th>
      <th scope=" xl:col" class=" text-red-600">Phone</th>
      <th scope=" xl:col" class=" text-red-600">Address</th>
      <th scope=" xl:col">Update</th>

    </tr>
  </thead>
@foreach ($data as $d )
     <tbody>
    <tr>
      <th scope="row">{{$d->id}}</th>
      <td>{{$d->name}}</td>
      <td>{{$d->email}}</td>
      <td>{{$d->role}}</td>
      <td>{{$d->phone}}</td>
      <td>{{$d->address}}</td>
      <td><button class=" btn btn-danger "><a href="{{route('list#update',$d->id)}}">Update</a></button></td>
    </tr>
  </tbody>
@endforeach
</table>
    </div>
@endsection
