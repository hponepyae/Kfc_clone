@extends('mainSource.main')
@section('main')
   <div class="row" style="height: 100vh">
       {{-- left  --}}
    <div class="col-3 col-xl-2 border-1 shadow-sm">
        <div class="flex justify-center mt-3">
            <img src="{{asset('photo/little-kfc.png')}}" alt="" class=" xl:w-3/4 w-4/4">
        </div>

        <div class=" text-center font-bold text-sm xl:text-2xl mt-12 p-3">
          Menu
        </div>


        <div class="mt-3">
            <ul class=" no-underline text-xs xl:text-lg text-red-600 flex flex-column justify-center align-items-center">
        <li class=" my-2 font-semibold hover:text-slate-950 hover:scale-100 duration-300"><a href="{{route('user#iteam')}}">Iteam</a></li>
        <li class=" my-2 font-semibold hover:text-slate-950 hover:scale-100 duration-300"><a href="">Order</a></li>
        <li class=" my-2 font-semibold hover:text-slate-950 hover:scale-100 duration-300"><a href="">Payment</a></li>
       </ul>
        </div>
    </div>


        {{-- right  --}}
    <div class="col bg-slate-200">
        <div class="row bg-white">
            <div class=" col">
               <form action="">
                <input type="text" class=" form-control w-4/6 xl:w-2/4 mt-3 mb-3 xl:ml-12 border-red-600 text-red-600" placeholder="search" >
               </form>
            </div>

            <div class="col">
                <div class=" flex justify-end">
                    <div class="btn-group mt-4 mb-3 mr-7 cursor-pointer">
  <button type="button" class=" text-red-600 " data-bs-toggle="dropdown" aria-expanded="false">
    {{Auth::user()->name}}
  </button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li class="dropdown-item hover:bg-red-500">{{Auth::user()->email}}</li>
    <li class=" "><a class="dropdown-item hover:bg-red-500" href="#">Account</a></li>
    <li class="dropdown-item">
             <form action="{{route('logout')}}" method="POST">
        @csrf
     <input type="submit" value="logout" class="  text-red-600">
    </form>
    </li>
  </ul>
</div>
                </div>
            </div>
        </div>
     {{-- center  --}}
       @yield('userHome')

         {{-- center  --}}

         <div class="mt-5 fixed bottom-4 right-20 animate-bounce">
            <button type="button" class="btn text-white hover:bg-red-800 bg-red-600 position-relative">
                order
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                    99+
                    <span class="visually-hidden">unread messages</span>
                </span>
            </button>
         </div>
    </div>
   </div>
@endsection

