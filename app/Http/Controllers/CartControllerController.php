<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class CartControllerController extends Controller
{
   public function home () {
        return view('admin.home');
    }

    public function list () {
         $data= User::get();

        return view('admin.adminList',compact('data'));
    }

    public function listupdate ($id) {

       $dataid = User::where('id',$id)->first();
        return view('admin.listUpdate',compact('dataid'));
    }

    public function updateList (Request $request) {
        $id = $request->updateId;
        $roleUpdate = $this->roleUpdate($request);
         $update = User::where('id',$id)->update($roleUpdate);
         return redirect()->route('admin#list');
    }

    private function roleUpdate ($request) {
     return ['role' => $request->role];
    }
}
