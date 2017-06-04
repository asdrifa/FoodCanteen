<?php

namespace App\Http\Controllers;

use App\Cart;
use App\FoodItem;
use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Auth;

class FoodItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
       $fooditem = FoodItem::all();
	   return view('shop.index', ['fooditem' => $fooditem] );
    }
public function getAddToCart(Request $request, $id) {
	$fooditem = Fooditem::find($id);
	 $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($fooditem, $fooditem->id);

             $request->session()->put('cart',$cart);

   
    return redirect()->route('fooditem.index');
}
public function getCart() {
	if (!Session::has('cart')) {
		return view('shop.food-cart');
	}
$oldCart = Session::get('cart');
$cart = new Cart($oldCart);
return view('shop.food-cart', ['fooditem' => $cart->items, 'totalPrice' =>$cart->totalPrice]);
}
public  function getCheckout() {
	 if (!Session::has('cart')) {
	  return view('shop.food-cart');
	 }
	 $oldCart = Session::get('cart');
	 $cart = new Cart($oldCart);
	 $total = $cart->totalPrice;
	 return view('shop.checkout', ['total' => $total]);
}
public function postCheckout(Request $request)
{
	if (!Session::has('cart')) {
	  return redirect()->route('shop.food-cart');
	 }
	 $oldCart = Session::get('cart');
	 $cart = new Cart($oldCart);
	 $order = new Order();
	 $order->cart = serialize($cart);
	 $order->address = $request->input('address');
	 $order->name = $request->input('name');
	 
	 Auth::user()->orders()->save($order) ;
	 
	 Session::forget('cart');
	 return redirect()->route('fooditem.index')->with('success', 'Successfully purchased foods!');
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
