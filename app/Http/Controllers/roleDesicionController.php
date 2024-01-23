<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class roleDesicionController extends Controller
{
    public function desicion () {

        if (auth::user()->role == 'admin') {
            return redirect()->route('admin#page');
        }

        return redirect()->route('user#iteam');
    }
}
