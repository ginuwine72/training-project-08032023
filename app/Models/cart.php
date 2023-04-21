<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['product_id', 'quantity', 'price'];

    public function addItem($product_id, $quantity, $price)
    {
        $cartItem = $this->where('product_id', $product_id)->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->price += $price;
            $cartItem->save();
        } else {
            $this->create([
                'product_id' => $product_id,
                'quantity' => $quantity,
                'price' => $price
            ]);
        }
    }

    public function removeItem($product_id)
    {
        $this->where('product_id', $product_id)->delete();
    }

    public function updateItemQuantity($product_id, $quantity)
    {
        $cartItem = $this->where('product_id', $product_id)->first();
        $cartItem->quantity = $quantity;
        $cartItem->price = $quantity * $cartItem->price_per_unit;
        $cartItem->save();
    }

    public function getCartItems()
    {
        return $this->all();
    }

    public function emptyCart()
    {
        $this->truncate();
    }
}

