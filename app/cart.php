<?php

namespace App;

class Cart
{
    protected $cartItems = [];

    public function addItem($productId, $quantity, $price)
    {
        if (isset($this->cartItems[$productId])) {
            $this->cartItems[$productId]['quantity'] += $quantity;
        } else {
            $this->cartItems[$productId] = [
                'quantity' => $quantity,
                'price' => $price
            ];
        }
    }

    public function removeItem($productId)
    {
        unset($this->cartItems[$productId]);
    }

    public function updateItemQuantity($productId, $quantity)
    {
        $this->cartItems[$productId]['quantity'] = $quantity;
    }

    public function getCartItems()
    {
        return $this->cartItems;
    }

    public function emptyCart()
    {
        $this->cartItems = [];
    }
}
