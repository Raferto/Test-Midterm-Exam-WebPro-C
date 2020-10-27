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
        // $item->nama_barang = $request->nama_barang;
        // $item->jenis_barang = $request->jenis_barang;

        // $item->save();

        //cara 2
        // Item::create([
        //     'nama_barang' => $request->nama_barang,
        //     'jenis_barang' => $request->jenis_barang
        // ]);
        
        $request->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required'
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
            'nama_barang' => 'required',
            'jenis_barang' => 'required'
        ]);
        
        Item::where('id',$item->id)
            ->update([
                'nama_barang' => $request->nama_barang,
                'jenis_barang' => $request->jenis_barang
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