<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authcontroller extends Controller
{
function mainPage () {
    return view('home');
}

function loginPage () {
    return view ('userlogin');
}

function registerPage () {
    return view ('register');
}
}
