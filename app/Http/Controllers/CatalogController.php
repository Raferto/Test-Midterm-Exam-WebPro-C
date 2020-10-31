<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\ItemCategory;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getJoinItem(){
        $item_list = Item::join('shops', 'items.shop_id', '=', 'shops.id')
        ->join('item_categories', 'items.category_id', '=', 'item_categories.id')
        ->join('item_conditions', 'items.condition_id', '=', 'item_conditions.id');

        return $item_list;
    }
    
    public function filterCategory($id){
        $item_list = CatalogController::getJoinItem()->where('items.category_id','=', $id)->get();
        return view('catalog.index', ['item_list' => $item_list]);
    }

    public function indexCategory(){
        $categories = ItemCategory::all();
        return view('catalog.category', ['categories' => $categories]);
    }

    public function index()
    {
        // $catalog = DB::table('items')->get();
        // $item_list = Item::all();
        // dump($catalog);

        $item_list = CatalogController::getJoinItem()->get();
        // dd($item_list);
        return view('catalog/index', ['item_list' => $item_list]);
        //CatalogController::filterCategory();
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
