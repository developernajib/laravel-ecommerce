<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;

class HomeController extends Controller
{
    public function AdminDashboard(){
        $user_type=Auth::user()->user_type;

        if($user_type=="admin"){
            return view("admin.home");
        }else{
            $data = product::paginate(12);
            $user=auth()->user();
            $count=cart::where("name",$user->name)->count();

            return view("User.home", compact("data","count"));
        }

    }

    public function index(){
        $data = product::paginate(12);
        
        return view("User.home", compact("data"));
    }

    public function search(Request $request){
        $search=$request->search;
        if($search==""){
            $data = product::paginate(6);
            
            return view("User.home", compact("data"));
        }
        $data=product::where("title","Like","%".$search."%")->get();
        return view("User.home",compact("data"));
    }

    public function addCart(Request $request, $id){
        if(Auth::id()){
            $user=auth()->user();
            $product=product::find($id);
            $cart=new cart;
            $cart->name=$user->name;
            $cart->address=$user->address;
            $cart->product_title=$product->title;
            $cart->price=$product->price;
            $cart->quantity=$request->quantity;
            $cart->save();

            return redirect()->back()->with("message","Product Added Successfully");
        }else{
            return redirect("/login");
        }
    }

    public function showCart(){
        $user=auth()->user();
        $cart=cart::where("name",$user->name)->get();
        $count=cart::where("name",$user->name)->count();

        return view("User.showCart", compact("count","cart"));
    }

    public function deleteCart($id){
        $data=cart::find($id);
        $data->delete();
        return redirect()->back()->with("message","Product removed successfully");
    }

    public function confirmOrder(Request $request){
        $user=auth()->user();
        $name=$user->name;
        $phone=$user->phone;
        $address=$user->address;
        foreach($request->productname as $key=>$productname){
            $order=new order;
            $order->product_name=$request->productname[$key];
            $order->price=$request->price[$key];
            $order->quantity=$request->quantity[$key];

            $order->name=$name;
            $order->address=$address;
            $order->status="Not Delivered";
            $order->save();
        }
        DB::table("carts")->where("name",$name)->delete();
        return redirect()->back()->with("message","Product order successfully");
    }
    public function showSingleProduct($id){
        $data=product::find($id);
        return view("User.detailsPage",compact("data"));
    }
}
