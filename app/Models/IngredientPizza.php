<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientPizza extends Model
{
    use HasFactory;

    protected $fillable = ['ingredient_id', 'pizza_id'];

    public $primaryKey = ['ingredient_id', 'pizza_id'];

    public function Pizza()
    {
        return $this->belongsToMany(Pizza::class, 'ingredient_id');
    }

    public function Ingredient()
    {
        return $this->belongsToMany(Ingredient::class, 'pizza_id');
    }
}
