<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;
use App\Cart;

class HomeController extends Controller
{
    //
    public function index(Request $request) {
//        dd($request->get('search'));
        $items = Item::Where('status',0);
        if (!empty($request->get('search'))) {
            $items->Where('title','Like','%'.$request->get('search').'%');
        }
        $items = $items->get();

        $count_item_in_cart = Cart::Where('user_id',auth()->user()->id)->count();

        return view('user.home',compact('items','count_item_in_cart'));
    }
}
