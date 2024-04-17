<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Ingredient_Pizza extends Model
{
    use HasFactory;

    public $primaryKey = ['ingredient_id', 'pizza_id'];
    protected $fillable = ['ingredient_id', 'pizza_id'];
}
