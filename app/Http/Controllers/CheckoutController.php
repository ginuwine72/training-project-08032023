<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;

class CheckoutController extends Controller
{
    public function create()
    {
        $cartItems = Cart::getContent();
        $shippingAddress = Auth::user()->shippingAddress;
        
        return view('checkout.create', [
            'cartItems' => $cartItems,
            'shippingAddress' => $shippingAddress,
        ]);
    }

    public function store(CheckoutRequest $request)
    {
        // Create a new checkout instance
        $checkout = new Checkout();

        // Set the checkout properties
        $checkout->name = $request->input('name');
        $checkout->phone = $request->input('phone');
        $checkout->address = $request->input('address');
        $checkout->city = $request->input('city');
        $checkout->state = $request->input('state');
        $checkout->zip = $request->input('zip');


        // Save the checkout to the database
        $checkout->save();
        

        // Redirect the user to the order confirmation page
        return view('payment', ['checkout' => $checkout]);
    }
    
    public function checkout()
{
    $cart = session('cart');
    $total = 0;
    foreach ($cart as $id => $product) {
        $total += $product['quantity'] * $product['price'];
    }
    return view('checkout', compact('total'));

    
}
    public function index()
    {
        $checkout = Checkout::all();
    
        return view('checkout', ['checkout' => $checkout]);
    }
    public function show()
    {
        $checkout = Checkout::all();
        
        return view('checkout',['checkout'=>$checkout]);
    }
    public function showOrderReviewPage()
    {
        $cart = Cart::getContent();
        $subtotal = Cart::getSubTotal();
        $total = Cart::getTotal();
        
        return view('orderreview', compact('cart', 'subtotal', 'total'));
    }
    public function myControllerMethod()
{
    $cart = []; // populate the $cart array with data
    return view('orderreview')->with('cart', $cart);
}

}
