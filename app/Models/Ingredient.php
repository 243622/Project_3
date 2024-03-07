<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'unit_id'];

    public function Unit()
    {
        return $this->hasMany(Unit::class, 'unit_id');
    }

    public function Pizza()
    {
        return $this->belongsToMany(Pizza::class, 'ingrediënt_id');
    }
}
