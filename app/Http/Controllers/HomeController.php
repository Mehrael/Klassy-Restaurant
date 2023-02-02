<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Food;
use App\Models\Chef;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
            return redirect('redirects');

        $data = food::all();
        $data2 = chef::all();
        return view('home',compact("data","data2"));
    }

    public function redirects()
    {
        $userType = Auth::user()->userType;
        $data = food::all();
        $data2 = chef::all();

        if($userType == '1')
            return view('admin.adminHome');
        else
        {
            $user_id = Auth::id();
            $count = cart::where("user_id",$user_id)->count();

            return view('home',compact("data","data2","count"));
        }
    }

    public function addCart(Request $request, $id)
    {
        if(Auth::id()) // if the user logged in
        {
            $user_id = Auth::id();
            $food_id = $id;
            $quantity = $request->quantity;
            $cart = new cart;

            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $quantity;

            $cart->save();

            return redirect()->back();
        }
        else
            return redirect('/login');

    }

    public function showCart($id)
    {
        $count = cart::where("user_id", $id)->count();

        if(Auth::id() != $id)
            return redirect()->back();

        $item_id = cart::select('*')->where("user_id", $id)->get();
        $data = cart::where("user_id", $id)->join('food','food.id' , '=', 'carts.food_id')->get();

        return view('showCart',compact('count', 'data','item_id'));
    }

    public function removeFromCart($id)
    {
        $data = cart::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function confirmOrder(Request $request)
    {
        foreach($request->foodName as $key => $foodName)
        {
            $data = new order;

            $data->foodName = $foodName;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;

            $data->save();
        }

        return redirect()->back();
    }
}
