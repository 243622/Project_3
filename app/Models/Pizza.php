<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $table = 'Pizza';

    public $primaryKey = 'PizzaId';
    protected $fillable = ['pizzaName', 'pizzaPrice', 'pizzaSize', 'pizzaImage', 'pizzaIngrediënts_id'];

    public function Ingredient()
    {
        return $this->hasMany(Ingredient::class, 'pizzaIngrediënts_id');
    }

    public function Order()
    {
        return $this->belongsToMany(Order::class, 'pizza_id');
    }
}
