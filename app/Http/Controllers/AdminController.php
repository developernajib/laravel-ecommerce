<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;

class AdminController extends Controller
{
    public function product(){
        return view("admin.product");
    }

    public function uploadProduct(Request $request){
        // print_r($request->all());
        $data = new product;
        $image = $request->file;
        $imageName = time().".".$image->getClientOriginalName();
        $request->file->move("productImage",$imageName);
        $data->image= $imageName;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        
        $data->save();
        return redirect()->back()->with("message","Product Added Successfully");
    }
    
    public function showProduct(){
        $data = product::all();
        
        return view("admin.showProduct", compact("data"));
    }
    
    public function deleteProduct($id){
        $data = product::find($id);
        $data->delete();
        
        return redirect()->back()->with("message","Product Deleted Successfully");
    }
    
    public function updateView($id){
        $data = product::find($id);
        
        return view("admin.updateView", compact("data"));
    }
    
    public function updateProduct(Request $request, $id){
        $data = product::find($id);

        $image = $request->file;
        if($image){
            $imageName = time().".".$image->getClientOriginalName();
            $request->file->move("productImage",$imageName);
            $data->image= $imageName;
        }
        $data->title=$request->title;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        
        $data->save();
        return redirect()->back()->with("message","Product Updated Successfully");
    }

    public function showOrder(){
        $order=order::all();
        return view("admin.showOrder",compact("order"));
    }

    public function updateStatus($id){
        $order=order::find($id);
        $order->status="Delivered";
        $order->save();

        return redirect()->back();
    }
}
