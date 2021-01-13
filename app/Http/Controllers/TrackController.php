<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrackRequest;
use App\Models\Item;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function create($item_id)
    {
        $item = Item::find($item_id);
        return view ('tracks.create', compact('item'));

    }

    public function store(TrackRequest $request , $item_id)
    {

        // dd($request->all());
        $item = Item::find($item_id);

        $item->track()->create([
            'type' => $request->type,
            'quantity' =>$request->quantity,
        ]);

        return redirect("/items/{$item->id}");
    }


}
