 @extends('mainSource.main')
 @section('main')
     <div class=" flex flex-column justify-center align-items-center">
            <img src="{{asset('photo/kfc-logo.jpg')}}" alt="" class=" w-3/4 xl:w-1/4 mb-10 mt-16">
         <form action="{{route('login')}}" method="POST" class=" form-control w-3/4 xl:w-1/4 p-4 border-red-600">
    @csrf

    <div class="my-3">
        <label for="" class=" text-red-600 mb-2">Email</label> <br>
  <input type="text" name="email" class=" form-control border-red-600">

</div>



<div class="my-3">
    <label for="" class=" text-red-600 mb-2">Password</label> <br>
 <input type="password" name="password" class=" form-control border-red-600">

</div>

<div class=" flex justify-center mt-8">
     <input type="submit" class=" btn btn-outline-danger">
</div>

<p class=" mt-4 text-danger text-xs xl:text-sm text-center">You've not Account <a href="{{route('user#register')}}" class=" text-primary ms-1 underline"> Register Here!</a></p>
</form>
     </div>
 @endsection

