<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'PizzaName' => 'required | max:255',
            'PizzaPrice' => 'required | max:255',
            'PizzaImage' => 'required | max:255',
            'PizzaIngrediënts' => 'required | max:255'
        ]);
        Pizza::create($validData);

        return redirect()->route('crudmedewerkers.pizza.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pizza $pizza)
    {
        return view('crudmedewerkers.pizza.show', ['pizza' => Pizza::findOrFail($pizza)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pizza $pizza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pizza $pizza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pizza $pizza)
    {
        Pizza::destroy($pizza);
        return redirect()->route('crudmedewerkers.pizza.index');
    }
}
