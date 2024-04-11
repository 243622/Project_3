<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzaOrder extends Model
{
    use HasFactory;

    protected $fillable = ['Pizza_Id', 'Order_Id', 'status_pizza'];
}
