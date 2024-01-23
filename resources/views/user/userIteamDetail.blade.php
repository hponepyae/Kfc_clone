@extends('user.userHome')
@section('userHome')
 <div class=" w-3/4 mx-auto mt-24 ">
    <h1 class=" font-bold text-3xl mb-3">{{$data1->name}}</h1>
    <img src="{{asset('storage/'.$data1->photo)}}" class=" w-[50%]" alt="">
    <div class="">
       <p class=" text-slate-400 my-3 font-bold"><span class=" text-lg text-black">Description - </span>{{$data1->description}}</p>
     <div class="flex mb-6 cursor-pointer">
        <span class=""><i class="fa-solid fa-dollar-sign text-warning mr-1"></i>Price - {{$data1->price}}</span>
        <div class=" flex justify-between ms-36">
        <span class="  mr-2"><i class="fa-regular fa-clock text-warning mr-1"></i>Waiting Time - {{$data1->waitingTime}}</span>
        <span class=" " ><i class="fa-solid fa-star text-warning mr-1"></i> Rating - {{$data1->rating}}</span>
        </div>
        </div>

        <div class="">
            <button class=" btn btn-danger">Add</button>
            <button class=" ms-3 btn btn-warning">Order</button>
        </div>
    </div>
 </div>
@endsection
