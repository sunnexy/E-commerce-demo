<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeController extends Controller
{
    public function base()
    {
        return view('base');
    }
    public function add($id, $name, $price)
    {
//        $name = $request->input('name');
//        $price = $request->input('price');

        $cart = Cart::add($id, $name, 1, $price);
        //Cart::add(['id' => '293ad', 'name' => $name, 'qty' => 1, 'price' => $price, 'options' => ['size' => 'large']]);
        return back();
    }
    public function cart()
    {
        //$cart = Cart::content();//holds the content of the cart
        //$cartTotal = Cart::subtotal();//holds the sum total of the cart items
        return view('cart');
    }
    public function submit(Request $request)
    {
        $cartTotal = (float) str_replace(',', '', Cart::subTotal());
        $total = $request->tot;
        $balance = $total - $cartTotal;
        $deposit = $cartTotal - $total;
        if($total >= $cartTotal){
            return redirect()->back()->with('message', 'Transaction successfull. Your balance is #'. $balance);
        }
        return redirect()->back()->with('error', 'Insufficient funds. You need #'. $deposit. ' more to perform this transaction');

    }
    public function clear()
    {
        Cart::destroy();
        return back();
    }
    public function contact()
    {
        return view('contact');
    }
}
