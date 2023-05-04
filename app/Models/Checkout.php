<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $table = 'checkout';

    protected $fillable = [
        'customer_name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip',
        'card_name',
        'card_number',
        'card_expiry',
        'card_cvv',
    ];
}
