<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\products;
use App\Models\order;
use App\Models\cart;
use Session;

class ProductController extends Controller
{
     
    function index()
    {
        $data=products::all();
        return View('products',['products'=>$data]);
    }

    function detail($id)
    {
        $data=products::find($id);
        return View('detail',['products'=>$data]);

    }
    function AddToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new cart;
           $user =  $req->session()->get('user');
           $userdetails = json_decode(json_encode($user), true);
           $userid = $userdetails["id"];
           $cart->user_id=$userid;
           $cart->product_id=$req->product_id;
           $cart->save();

           return redirect('/');

        }
        else
        {
            return redirect("/login");
        }
        
    }
    static function cartItem()
    {
        $userDetails=Session::get('user');
        $user = json_decode(json_encode($userDetails),true);
        $userid = $user["id"];
        return cart::where('user_id',$userid)->count();
    }
    function cartList()
    {
        $userid = Session::get('user')->id;
        $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userid)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return View('cartlist',['products'=>$products]);
    }
    function removecart($id)
    {
        cart::destroy($id);
        return redirect('/cartlist');
    }
    function ordernow()
    {
        $userid = Session::get('user')->id;
        $total =  $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userid)
        ->sum('products.price');

        return View('ordernow',['total'=>$total]);
    }

    function orderplace(Request $req)
    {
        $userid = Session::get('user')->id;
        $allcart=cart::where('user_id',$userid)->get();
        foreach($allcart as $cart)
        {
            $order = new order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            cart::where('user_id',$userid)->delete();



        }
        return redirect("/");

    }
    function myOrders()
    {
        $userid = Session::get('user')->id;
        $orders =  DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userid)
        ->get();

        return View('myorders',['orders'=>$orders]);

    }
    
    }

