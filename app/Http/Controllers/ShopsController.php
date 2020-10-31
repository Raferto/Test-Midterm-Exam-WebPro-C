<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\State;
use App\Models\City;
use App\Models\Badge;
use App\Models\User;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    public function show(){
        $current_user = auth()->user();
        if($current_user->auth_level == 'shopper'){
            $myshop = Shop::find($current_user->shop_id);
            return view('shop.myShop', ['myshop' => $myshop]);
        }
        else{
            $states = State::all();
            $cities = City::all();
            $badges = Badge::all();
            return view('shop.create', ['states' => $states, 'cities' => $cities, 'badges' => $badges]);
        }
    }

    public function GetCitybyState($id){
        $cities = City::where('state_id', $id)->get();
        echo json_encode($cities);
    }

    public function create(Request $request){
        $current_user = auth()->user();
        $current_shop = Shop::create($request->all());
        
        // return view('debug', ['request' => $request->all()]);
        User::where('id', $current_user->id)->update([
            'auth_level' => 'shopper',
            'shop_id' => $current_shop->id
        ]);
        return redirect('/shop')->with('status','Your Shop Account has created');
    }
}
