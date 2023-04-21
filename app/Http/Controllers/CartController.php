<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
class CartController extends Controller
{
    public function addItemToCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $price = $request->input('price');

        $cart = new Cart();
        $cart->addItem($product_id, $quantity, $price);

        return redirect()->back();
    }

    public function removeItemFromCart(Request $request)
    {
        $product_id = $request->input('product_id');

        $cart = new Cart();
        $cart->removeItem($product_id);

        return redirect()->back();
    }

    public function updateCartItemQuantity(Request $request)
    {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');

        $cart = new Cart();
        $cart->updateItemQuantity($product_id, $quantity);

        return redirect()->back();
    }

    public function showCart()
    {
        $cart = new Cart();
        $cartItems = $cart->getCartItems();

        return view('cart', ['cartItems' => $cartItems]);
    }

    public function emptyCart()
    {
        $cart = new Cart();
        $cart->emptyCart();

        return redirect()->back();
    }
    public function process(Request $request)
{
    // process payment logic
    // ...

    // redirect to confirmation page
    return view('confirmation');
}

}

