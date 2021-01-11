<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::get();
        return view('index', compact('items'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $name = $request->name;
        $total = $request->total;

        $item = Item::create([
            'name'=> $name,
            'total' => $total,
        ]);
        
       return  redirect('/items');
    
    }

    public function show($id)
    {
        $item = Item::find($id);
        
        return view('show', compact('item'));
    }

    public function update($id)
    {   
        $item = Item::find($id);
        return view('update', compact('item'));
    }


    public function edit(Request $request, $id)
    {
        //data yang dkt request tu
        $name = $request->name;
        $total = $request->total;

        $item = Item::find($id);
        $item->name = $name;
        $item->total = $total;

        $item->save();

        return  redirect('/items');
    }



    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/items');
    }





}
