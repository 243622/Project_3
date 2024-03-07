<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'pizza_id', 'total_price', 'message', 'status_pizza', 'status_order'];

    public function Customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function Pizza()
    {
        return $this->hasMany(Pizza::class, 'pizza_id');
    }
}
