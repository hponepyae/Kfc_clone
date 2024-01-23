@extends('mainSource.main')
@section('tital','home')
@section('main')


 <div class=" flex justify-end ">
    <span class=" p-2 text-red-600  hover:text-slate-900"><a href="{{url('userlogin')}}">Login</a></span>
    <span class=" p-2 text-red-600 mr-4 hover:text-slate-900"><a href="{{url('userregister')}}">Register</a></span>
 </div>


        <div class=" mt-44 ">
            <div class=" flex  justify-center align-items-center">
                <img src="{{asset('photo/pngimg.com - kfc_PNG53.png')}}" class=" w-3/4 xl:w-1/4">
                </div>
                <h1 class=" text-red-600 text-4xl text-center font-bold xl:text-4xl">Hello!</h1>
                <div class="text-red-600 font-bold font-mono text-center mt-5 text-sm xl:text-lg hehe ">
                    <span class=" text">Hurry Up! <span class="text koko"></span></span>
                </div>
        </div>
       </div>
        @endsection

