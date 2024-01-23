<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    //  cartHome
    function cartStart (Request $request) {
        $value = $request->select;
         return $this->magano($value,$request);
        }

    //    addingCart
    function addCate () {
        return view ('admin.categoryAdd');
    }

        //  addDataToTable
    function infoAdd (Request $request) {

        $data = $this->addCartData($request);
        if($request->photo){
        $photo =uniqid().$request->photo->getClientOriginalName();
        $request->photo->storeAs('public',$photo);
        $data['photo'] = $photo;
    }

     Category::create($data);
     return Redirect()->route('cart#home');
    }

      //updateCategory
    public function updateCategory ($d) {
       $updateCate = Category::where('id',$d)->first();
      return view('admin.updateCategory',compact('updateCate'));
      }

      //updateDetail
      function updateDetail (Request $request , $id) {
        $updatephoto= $request->photo;
         $update= $this->addCartData($request);
      if($request->photo) {
           $oldImg = Category::select('photo')->where('id',$id)->first();
            $oldPhoto = $oldImg['photo'];

           if($oldPhoto != null) {
            Storage::delete('public/'.$oldPhoto);
           }
         $photo1 =uniqid().$updatephoto->getClientOriginalName();
         $updatephoto->storeAs('public',$photo1);
         $update['photo'] = $photo1;
    }
        Category::where('id',$id)->update($update);
        return redirect()->route("cart#home");

      }

    private function addCartData ($request) {
        return [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'type' => $request->type,
            'waitingTime' => $request->waiting,
            'rating' => $request->rating
        ];
    }


        //sorting
    private function magano ($m,$n){
         if ($n->select == 'chicken') {
        return $this->minimo($m);

        }elseif ($n->select == 'juice') {
            return $this->minimo($m);
        }
        elseif ($n->select == 'delicious') {
            return $this->minimo($m);
        }
        elseif ($n->select == 'desert') {
           return $this->minimo($m);
        }
        else{
        $tableData = Category::paginate(4);
        return view('admin.adminCategoey',compact('tableData'));
        }
    }
    private function minimo ($d) {
         $tableData = Category::where('type',$d)->paginate(4);
            return view('admin.adminCategoey',compact('tableData'));
    }
             //sorting
}
