<?php

namespace App\Http\Controllers;

use App\Helper\CartHelper;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add(CartHelper $cart, $id)
    {
        $product = Product::find($id);

        $cart->add($product);

        return redirect()->route('home.product');
    }

    public function remove(CartHelper $cart, $id)
    {

        $cart->remove($id);

        return redirect()->route('cart');
    }

    public function update(CartHelper $cart, $id)
    {
        $quantity = request()->quantity ? request()->quantity : 1;
        $cart->update($id, $quantity);

        return redirect()->route('cart');
    }

    public function clear(CartHelper $cart)
    {

        $cart->clear();

        return redirect()->route('cart');
    }

}
