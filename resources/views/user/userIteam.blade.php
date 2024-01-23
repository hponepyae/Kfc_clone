@extends('user.userHome')
@section('userHome')
 <div class="container-sm mt-12">
   <div class=" flex justify-center align-items-center">
    <img src="{{asset('photo/userKfc.png')}}" alt="" class=" w-28">
   <span class=" text-xl font-bold text-red-600 font-serif">Menu</span>
   </div>

   <div class=" mt-10  p-4 ">
          <div class="row ">
        @foreach ($data as $d )
            <div class="col-3 mx-auto my-3 relative  hover:duration-700 hover:ease-in">
                <div class="weeloo">
                <a href="{{route('iteam#detail',$d->id)}}">
                    <div class="  p-3 bg-white">
                        <div class=" flex justify-center">
                            <img src="{{ asset('storage/'.$d->photo)}}" class=" overflow-hidden" style="width:100%">
                        </div>

                        <div class="">
                         <p class=" text-center text-xl font-bold text-red-600 my-2">{{$d->name}}</p>
                        <p class=" text-xl font-italic text-red-600 mb-2">{{$d->description}}</p>
                       </div>

                       <div class="flex justify-between mb-3">
                        <span class=""><i class="fa-solid fa-dollar-sign text-warning mr-1"></i>{{$d->price}}</span>
                         <div class=" flex justify-between">
                        <span class="  mr-2"><i class="fa-regular fa-clock text-warning mr-1"></i>{{$d->waitingTime}}</span>
                        <span class=" " ><i class="fa-solid fa-star text-warning mr-1"></i>{{$d->rating}}</span>
                         </div>
                       </div>

                    </div>
                </a>

                <div class=" lover w-[92%] opacity-80 bg-slate-600  ">
                     <a href="">
                    <div class=" flex justify-center mt-24 hover:text-blue-600">
                        <span class=" font-bold text-white  mr-3">Order Now</span>
                       <i class="fa-regular fa-square-check mt-1 text-blue-600 font-bold"></i>
                    </div>
                    </a>
                </div>
                </div>
            </div>


        @endforeach




          </div>
   </div>
 </div>

  <div class="mt-3 p-4">
    {{$data->links()}}
   </div>
@endsection
