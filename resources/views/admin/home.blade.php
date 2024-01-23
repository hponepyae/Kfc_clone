@extends('mainSource.main')
@section('main')

  <div class="col">
     <div class=" border-b-1 shadow-sm d-flex justify-end p-4">
    <span class=" font-bold text-red-600 mr-3">{{Auth::user()->name}}</span>
     <form action="{{route('logout')}}" method="POST">
        @csrf
     <input type="submit" value="logout" class="  text-red-600">
    </form>
    </div>
 </div>
    <div class=" container-sm mx-auto mt-10">
        <div class=" d-flex flex-column justify-center align-items-center">
            <img src="{{asset('photo/pngimg.com - kfc_PNG53.png')}}" alt="" class=" w-3/4 xl:w-2/6" >
            <h1 class=" font-extrabold xl:text-3xl text-xl mt-4
            bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500
            text-transparent bg-clip-text
            hover:from-pink-500 hover:to-yellow-500">Hello {{Auth::user()->name}}</h1>
        </div>

        <div class="row mt-5 cursor-pointer">
              {{-- list  --}}
            <div class="col-6  flex justify-end">
            <div class=" hover:scale-105 duration-300 hover:bg-slate-100 hover:border-red-600 border-1 hover:text-red-500 mr-4 mb-3 p-3 bg-red-600 rounded-pill xl:w-1/4 lg:w-1/4 1/4 w-3/4  text-center text-slate-200 font-bold">
             <a href="{{route('admin#list')}}">User List</a>
            </div>
            </div>

              {{-- category --}}
            <div class="col-6  flex justify-start">
            <div class=" hover:scale-105 duration-300 hover:bg-slate-100 hover:border-red-600 border-1 hover:text-red-500  mb-3 p-3 bg-red-600 rounded-pill xl:w-1/4 lg:w-1/4 1/4 w-3/4  text-center text-slate-200 font-bold">
             <a href="{{route('cart#home')}}">Category</a>
            </div>
            </div>

               {{-- order  --}}
             <div class="col-6  flex justify-end">
            <div class=" hover:scale-105 duration-300 hover:bg-slate-100 hover:border-red-600 border-1 hover:text-red-500 mr-4 mb-3 p-3 bg-red-600 rounded-pill xl:w-1/4 lg:w-1/4 1/4 w-3/4  text-center text-slate-200 font-bold">
             <a href="">Order</a>
            </div>
            </div>

            {{-- delivery  --}}
             <div class="col-6  flex justify-start">
            <div class=" hover:scale-105 duration-300 hover:bg-slate-100 hover:border-red-600 border-1 hover:text-red-500  mb-3 p-3 bg-red-600 rounded-pill xl:w-1/4 lg:w-1/4 1/4 w-3/4  text-center text-slate-200 font-bold">
             <a href="">Delivery</a>
            </div>
            </div>
        </div>
    </div>
@endsection


