<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('items/index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // cara 1
        // $item = new Item;
        // $item->item_name = $request->item_name;
        // $item->item_category = $request->item_category;

        // $item->save();

        //cara 2
        // Item::create([
        //     'item_name' => $request->item_name,
        //     'item_category' => $request->item_category
        // ]);
        
        $request->validate([
            'item_name' => 'required',
            'item_category' => 'required'
        ]);

        // cara 3
        Item::create($request->all());
        return redirect('/items')->with('status','Data Barang Berhasil Ditambahkan!');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('items.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('items.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'item_name' => 'required',
            'item_category' => 'required'
        ]);
        
        Item::where('id',$item->id)
            ->update([
                'item_name' => $request->item_name,
                'item_category' => $request->item_category
            ]);

        return redirect('/items')->with('status','Data Barang Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        Item::destroy($item->id);
        return redirect('/items')->with('status','Data Barang Berhasil Dihapus!');
    }
}
