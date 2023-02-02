<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chef;
use App\Models\Order;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view("admin.users",compact("data"));
    }

    public function deleteUser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodMenu()
    {
        $data = food::all();
        return view("admin.foodMenu",compact('data'));
    }

    public function uploadFood(Request $request)
    {
        $data = new food;
        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodImage',$imageName);

        $data->image = $imageName;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }

    public function deleteMenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateView($id)
    {
        $data = food::find($id);

        return view('admin.updateView',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $data = food::find($id);

        if($request->image != null)
        {
            $image = $request->image;
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodImage',$imageName);

            $data->image = $imageName;
        }

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }

    public function reservation(Request $request)
    {

        $data = new reservation;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;

        $data->save();

        return redirect()->back();
    }

    public function viewReservations()
    {
        $data = reservation::all();
        return view('admin.adminReservations',compact('data'));
    }

    public function viewChef()
    {
        $data = chef::all();
        return view('admin.adminChef',compact('data'));
    }

    public function uploadChef(Request $request)
    {
        $data = new Chef;

        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefImage',$imageName);

        $data->image = $imageName;
        $data->name = $request->name;
        $data->speciality = $request->speciality;

        $data->save();

        return redirect()->back();
    }

    public function deleteChef($id)
    {
        $data = chef::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function updateChef($id)
    {
        $data = chef::find($id);

        return view('admin.updateChef',compact('data'));
    }

    public function updateCf(Request $request,$id)
    {
        $data = chef::find($id);

        if($request->image != null)
        {
            $image = $request->image;
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('chefImage',$imageName);

            $data->image = $imageName;
        }

        $data->name = $request->name;
        $data->speciality = $request->speciality;

        $data->save();

        return redirect()->back();
    }

    public function orders()
    {
        $data = order::all();
        return view('admin.orders',compact('data'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $data = order::where('name','like','%'.$search.'%')->orwhere('foodName','like','%'.$search.'%')
            ->get();

        return view('admin.orders',compact('data'));
    }

}
