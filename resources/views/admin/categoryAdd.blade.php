

@extends('mainSource.main')
@section('main')
 <div class=" flex flex-column justify-center align-items-center">
            <img src="{{asset('photo/registerLogo.jpg')}}" alt="" class=" w-3/4 xl:w-1/4 mb-10 mt-16">
         <form action="{{route('infor#add')}}" method="POST" class="mb-10 form-control w-3/4 xl:w-1/4 p-4 border-red-600" enctype="multipart/form-data">
    @csrf

 <div class="my-3">
        <label for="" class=" text-red-600 mb-2">Name</label> <br>
  <input type="text" value="{{old('name')}}" name="name" class=" form-control border-red-600">
</div>


    <div class="my-3">
        <label for="" class=" text-red-600 mb-2">Description</label> <br>
  <input type="text" value="{{old('description')}}" name="description" class=" form-control border-red-600">

</div>

      <div class="my-3">
        <label for="" class=" text-red-600 mb-2">photo</label> <br>
  <input type="file" name="photo" class=" form-control border-red-600">
</div>

       <div class="my-3">
        <label for="" class=" text-red-600 mb-2">price</label> <br>
  <input type="text" value="{{old('price')}}" name="price" class=" form-control border-red-600">

</div>

 <div class="my-3">
        <label for="" class=" text-red-600 mb-2">Type</label> <br>
  <select name="type" value="{{old('type')}}" id="" class=" form-control border-red-600">
                    <option value="chicken">Chicken</option>
                    <option value="juice">Juice</option>
                    <option value="desert">Desert</option>
                    <option value="delicious">Delicious</option>
                </select>

</div>


<div class="my-3">
    <label for="" class=" text-red-600 mb-2">Waiting Time</label> <br>
 <input type="number" value="{{old('waiting')}}" name="waiting" class=" form-control border-red-600">

</div>

<div class="my-3">
    <label for="" class=" text-red-600 mb-2">Rating</label> <br>
 <input type="number" value="{{old('rating')}}" name="rating" class=" form-control border-red-600">

</div>

<div class=" flex justify-center mt-8">
     <input type="submit" class=" btn btn-outline-danger">
</div>

<p class=" mt-4 text-danger text-xs xl:text-sm text-center"><a href="{{route('cart#home')}}" class=" text-primary ms-1 underline">Back</a></p>
</form>
     </div>
@endsection
