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
        $checkout->customer_name = $request->input('customer_name');
        $checkout->email = $request->input('email');
        $checkout->phone = $request->input('phone');
        $checkout->address = $request->input('address');
        $checkout->city = $request->input('city');
        $checkout->state = $request->input('state');
        $checkout->zip = $request->input('zip');
        $checkout->card_name = $request->input('card_name');
        $checkout->card_number = $request->input('card_number');
        $checkout->card_expiry = $request->input('card_expiry');
        $checkout->card_cvv = $request->input('card_cvv');

        // Save the checkout to the database
        $checkout->save();

        // Redirect the user to the order confirmation page
        return view('checkout.confirmation', ['checkout' => $checkout]);
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
     
}
