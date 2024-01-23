@extends('admin.adminMain')
@section('adminHome')
  <div class=" flex justify-between align-items-center  mt-4">
     <div class="  col bg-slate-200">
        <form action="{{route('cart#home')}}" class=" flex align-items-center ">
            @csrf
            <span class=" mb-2 text-danger mr-3">Sorting: </span>
           <div class=" bg-white flex mb-2 align-items-center p-2 rounded-lg ">
             <select name="select" id="" class="form-control border-0" >
                <option value="all" >All Iteam</option>
                <option value="chicken">Chicken</option>
                <option value="juice">Juice</option>
                <option value="desert">Desert</option>
                <option value="delicious">Delicious</option>
            </select>
            <input type="submit" value="Search" class="p-2 ml-2 w-14 text-danger rounded-lg cursor-pointer text-sm border-1 border-red-600">
           </div>
        </form>
     </div>



     <div class=" flex justify-center p-3 align-items-center w-1/4 ">
        <h1 class=" text-2xl font-bold text-red-600">Add Product</h1> <button class=" btn btn-danger  ml-4"><a href="{{route('cata#add')}}" class="">ADD</a></button>
    </div>

  </div>


  @foreach ($tableData as $t )

        <div class=" p-3 mt-3">
    <div class="row bg-slate-100 p-3">
        <div class=" col flex align-items-center">
            <img src="{{asset('storage/'.$t->photo)}}" alt="" class=" img-thumbnail w-2/6">
        <span class="text-danger ml-3 font-bold ">{{$t->name}}</span>
         </div>

         <div class="col flex justify-around align-items-center">
            <span class="text-danger ml-3 font-bold ">{{$t->description}}</span>
            <span class="text-danger ml-3 font-bold ">{{$t->price}} Kyats</span>
            <span class="text-danger ml-3 font-bold ">{{$t->waitingTime}} minutes</span>
            <span class="text-danger ml-3 font-bold "><i class="fa-solid fa-star mr-1"></i>{{$t->rating}}</span>
            <span class="text-white p-1 rounded-lg ml-3 font-bold bg-primary"><a href="{{route('update#cate',$t->id)}}">Update</a></span>
        </div>
    </div>
   </div>

  @endforeach


   <div class="mt-3 p-4">
    {{$tableData->links()}}
   </div>
@endsection
