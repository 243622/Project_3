<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $table = 'Pizza';
    protected $fillable = ['PizzaName', 'PizzaPrice', 'PizzaImage', 'PizzaIngrediënts'];
}
