<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzaOrder extends Model
{
    use HasFactory;

    protected $table = 'pizza_order';

    protected $fillable = ['Pizza_Id', 'Order_Id', 'status_pizza_id'];



    public function Pizzastatuses()
    {
        return $this->hasMany(PizzaStatus::class, 'id', 'status_pizza_id');
    }
}
