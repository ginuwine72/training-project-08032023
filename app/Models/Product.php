<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProductController;

class Product extends Model
{
    protected $table ='products';
    protected $primarykey='id';
    protected $fillable =['name','price','description','image'];
}
