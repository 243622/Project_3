<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'unit'];

    public $primaryKey = 'id';

    public function Pizza()
    {
        return $this->belongsToMany(Pizza::class, 'ingredient_id');
    }
}
