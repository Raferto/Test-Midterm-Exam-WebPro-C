<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $catalog = DB::table('items')->get();
        // $item_list = Item::all();
        // dump($catalog);
        $item_list = Item::join('shops', 'items.shop_id', '=', 'shops.id')
               ->join('shop_badges', 'shops.badge_id', '=', 'shop_badges.id')
               ->join('cities', 'shops.city_id', '=', 'cities.id')
               ->join('item_categories', 'items.category_id', '=', 'item_categories.id')
               ->join('item_conditions', 'items.condition_id', '=', 'item_conditions.id')
               ->get();

        // return view('debug', ['request' => $users[0]->shop_name]);
        return view('catalog/index', ['item_list' => $item_list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
