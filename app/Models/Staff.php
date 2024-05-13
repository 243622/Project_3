<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;


    public $primaryKey = 'id';

    protected $fillable = ['firstname', 'lastname', 'e-mail', 'phone-number', 'address', 'city'];

    public function staff()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
