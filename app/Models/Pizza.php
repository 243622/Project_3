<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $table = 'Pizza';

    public $primaryKey = 'PizzaId';
    protected $fillable = ['pizzaName', 'pizzaPrice', 'pizzaSize', 'pizzaImage', 'pizzaIngredients_id'];

    public function Ingredients()
    {
        return $this->BelongsToMany(Ingredient::class);
    }

    public function Order()
    {
        return $this->belongsTo(Order::class, 'pizza_id');
    }
}
