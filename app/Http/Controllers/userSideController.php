<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class userSideController extends Controller
{
    // function userHome () {
    //     return view('user.userIteam');
    // }

    function userIteam () {
        $data= Category::paginate('9');
        return view('user.userIteam',compact('data'));
    }

    function iteamDetail ($iteam) {
        $data1 = Category::where('id',$iteam)->first();
        return view('user.userIteamDetail',compact('data1'));
    }
}
