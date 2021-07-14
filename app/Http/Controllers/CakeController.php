<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cake;
use App\Models\Item;
class nullItem{
    public $id = 'Deleted-Item';
    public $itemname = 'Deleted-Item';
    public $price = 'Deleted-Item';
    public $itemcategory = "Deleted-Item";
}

class CakeController extends Controller
{
    public function welcome()
    {
        # code...
        return view('welcome');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function index()
    {
        # code...
        $cakes = Cake::where('completed', FALSE)->get();
        return view('/cake/index', ['cakes' => $cakes]);
    }
    public function history()
    {
        # code...
        $cakes = Cake::all();
        return view('cake/history', ['cakes' => $cakes]);
    }
    public function create()
    {
        # code...
        $item = Item::all();
        return view('cake/create')->with('item',$item);
    }
    public function store(Request $request)
    {
        # code...
        $cake = new Cake();
        
        $request->validate([
            'name'=>'required',
             'phoneno'=>'required',
             'flavour'=>'required',
             'topping'=>'required',
             'quantity'=>'required'
        ]);
        $cake->name = request('name');
        $cake->phoneno = request('phoneno');
        $cake->f_id = request('flavour');
        $cake->t_id = request('topping');
        $cake->quantity = request('quantity');
        $cake->completed = FALSE;

        $flavour = Item::findOrFail(request('flavour'));
        $topping = Item::findOrFail(request('topping'));
        $cake->totalcost= ($flavour->price + $topping->price)*$cake->quantity;
        $cake->save();
        
        $ID = $cake->orderid;
        $order = Cake::findOrFail($ID);
        $flavour = Item::find($order->f_id);
        if($flavour == null){$flavour = new nullItem();}
        $topping = Item::find($order->t_id);
        if($topping == null){$topping = new nullItem();}
        $quantity = Cake::findOrFail($ID);
        return view('cake/details', ['order' => $order, 'flavour' => $flavour, 'topping' => $topping]);   
    }

    public function update($orderId)
    {
        $item = Cake::findOrFail($orderId);
        $item->completed = TRUE;
        $item->save();
        $cakes = Cake::where('completed', FALSE)->get();
        return view('/cake/index', ['cakes' => $cakes]);
    }
    
    public function bill($orderId)
    {
        $order = Cake::findOrFail($orderId);
        $flavour = Item::find($order->f_id);
        if($flavour == null){$flavour = new nullItem();}
        $topping = Item::find($order->t_id);
        if($topping == null){$topping = new nullItem();}
        $quantity = Cake::findOrFail($orderId);
        return view('cake/bill', ['order' => $order, 'flavour' => $flavour, 'topping' => $topping, 'quantity' => $quantity]);
    }

    public function details($orderId)
    {
        $order = Cake::findOrFail($orderId);
        $flavour = Item::find($order->f_id);
        if($flavour == null){$flavour = new nullItem();}
        $topping = Item::find($order->t_id);
        if($topping == null){$topping = new nullItem();}
        $quantity = Cake::findOrFail($orderId);
        $totalcost = Cake::findorFail($orderId);
        return view('cake/details', ['order' => $order, 'flavour' => $flavour, 'topping' => $topping, 'quantity' => $quantity, 'totalcost' => $totalcost]);
    }


}
