<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MPizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pizzas = Pizza::all();
        return view('crudmedewerkers.pizza.index', ['pizzas' => $pizzas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crudmedewerkers.pizza.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'pizzaName' => 'required | max:255',
            'pizzaPrice' => 'required | max:255',
            'pizzaSize' => 'required | max:255',
            'pizzaImage' => 'required | max:255',
            'pizzaIngredients' => 'required | max:255'
        ]);
        Pizza::create($validData);

        return redirect()->route('pizza.index');


    }
    /**
     * Display the specified resource.
     */
    public function show(Pizza $pizza)
    {
        return view('crudmedewerkers.pizza.index', ['pizza' => Pizza::findOrFail($pizza)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pizza $pizza)
    {
        return view('crudmedewerkers.pizza.edit', ['pizza' => $pizza]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pizza $pizza)
    {
        $validData = $request->validate([
            'pizzaName' => 'required | max:255',
            'pizzaPrice' => 'required | max:255',
            'pizzaSize' => 'required | max:255',
            'pizzaIngredients' => 'required | max:255'
        ]);
        $pizza->update($validData);
        return redirect()->route('pizza.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pizza $pizza)
    {
        $pizza->delete();
        return redirect()->route('pizza.index');
    }
}
