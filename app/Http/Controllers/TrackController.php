<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrackRequest;
use App\Models\Item;
use App\Models\Track;
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

        if($request->type == 'in')
        {
            $item->total += $request->quantity ;
            $item->save();
        }
        elseif($request->type == 'out')
        {
            $item->total -= $request->quantity;
            $item->save();
        }


        return redirect("/items/{$item->id}");
    }


    public function destroy($id)
    {
        $track = Track::find($id);
        $item  = $track->item;  // dkt model belongs to
        if($track->type == 'in')
        {
            $item->total = $item->total - $item->quantity ;
            $item->save();
        }
        elseif($track->type == 'out')
        {
            $item->total= $item->total + $item->quantity;
            $item->save();
        }
        $track->delete();
        return redirect("/items/{$item->id}");
    }
}
