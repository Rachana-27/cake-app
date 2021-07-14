<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function show()
    {
        $items = Item::all();
        return view('item/show',['items'=> $items]);
    }
    public function create()
    {
        return view('/item/create');
    }
    public function store()
    {
        # code...
        $item = new Item();
        $item->itemname = request('itemname');
        $item->itemcategory = request('itemcategory');
        $item->price = request('price');
        $item->save();
        return redirect()->route('home');
    }
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('home');
    }
    
}
