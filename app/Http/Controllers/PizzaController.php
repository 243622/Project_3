<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        // Sample cart data for demonstration
        $cart = [];

        return view('app', compact('cart'));
    }
}