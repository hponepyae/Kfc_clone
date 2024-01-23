@extends('mainSource.main')
@section('main')

    <div class=" flex justify-center mt-10">
        <img src="{{asset('photo/little-kfc.png')}}" alt="">
    </div>
         <h1 class=" font-bold text-2xl text-center mt-5 text-red-600">Upadte Category</h1>

      <form action="{{route('update#detail',$updateCate->id)}}" method="POST" class=" mt-12" enctype="multipart/form-data">
        @csrf
        <div class="row container-sm mx-auto">
            {{-- left  --}}
        <div class="col">
            <div class="flex flex-column justify-end align-items-center">
                  <img src="{{asset('storage/'.$updateCate->photo)}}" class=" img-thumbnail w-2/4" alt="">
                 <input type="file" name="photo" class=" mt-5">
            </div>
        </div>

        {{-- right  --}}
        <div class="col">
            <div class="my-3">
        <label for="" class=" text-red-600 mb-2">Name</label> <br>
  <input type="text" value="{{$updateCate->name}}" name="name" class="w-2/4 form-control border-red-600">
</div>


    <div class="my-3">
        <label for="" class=" text-red-600 mb-2">Description</label> <br>
  <input type="text" value="{{$updateCate->description}}" name="description" class="w-2/4 form-control border-red-600">

</div>


       <div class="my-3">
        <label for="" class=" text-red-600 mb-2">price</label> <br>
  <input type="text" value="{{$updateCate->price}}" name="price" class="w-2/4 form-control border-red-600">

</div>

 <div class="my-3">
        <label for="" class=" text-red-600 mb-2">Type</label> <br>
  <select name="type" id="" class="w-2/4 form-control border-red-600">
                    <option value="chicken"@selected($updateCate->type == 'chicken') >Chicken</option>
                    <option value="juice" @selected($updateCate->type == 'juice')>Juice</option>
                    <option value="desert" @selected($updateCate->type == 'desert')>Desert</option>
                    <option value="delicious" @selected($updateCate->type == 'delicious')>Delicious</option>
                </select>

</div>


<div class="my-3">
    <label for="" class=" text-red-600 mb-2">Waiting Time</label> <br>
 <input type="number" value="{{$updateCate->waitingTime}}" name="waiting" class="w-2/4 form-control border-red-600">

</div>

<div class="my-3">
    <label for="" class=" text-red-600 mb-2">Rating</label> <br>
 <input type="number" value="{{$updateCate->rating}}" name="rating" class="w-2/4 form-control border-red-600">

</div>

<div class=" flex justify-start mt-8 mb-8">
     <input type="submit" class=" btn btn-outline-danger">
</div>
        </div>
        </div>
      </form>


@endsection
