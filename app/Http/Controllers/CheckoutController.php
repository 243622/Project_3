<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */    public function index()
    {
        // Assuming $cartItems contains the item added to the cart
        $cartitems = []; // Retrieve cart item from your storage (session, database, etc.)

        return view('checkout', compact('cartItems'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('checkout/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'firstname' => 'required|string|max:100',
            'lastname' => 'string|max:100',
            'e-mail' => 'string',
            'phone-number' => 'string',
            'address' => 'string',
            'city' => 'string'
        ]);

        Customer::create($validatedData);

        return view('checkout');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
