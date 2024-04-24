<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Pizza;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming $cartItems contains the item added to the cart
        $cartItems = []; // Retrieve cart item from your storage (session, database, etc.)

        // Call showCheckout() method to retrieve cart data
        return $this->showCheckout();
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
        // Debugging: Print the request data to inspect what's being received
        // dd($request->all());

        $validatedData = $request->validate([
            'firstname' => 'required|string|max:40',
            'lastname' => 'required|string|max:40',
            'e-mail' => 'required|email|max:50',
            'phone-number' => 'required|string|max:25',
            'address' => 'required|string|max:100',
            'city' => 'required|string|max:40',
            'additional_data' => 'nullable|string|max:250',
        ]);

        // Debugging: Print the validated data to inspect
        // dd($validatedData);

        // Debugging: Check if the cart data is being received correctly
        // dd($request->input('pizza'));

        // Create customer
        $customer = Customer::create([
            'firstname' => $validatedData['firstname'],
            'lastname' => $validatedData['lastname'],
            'e-mail' => $validatedData['e-mail'],
            'phone-number' => $validatedData['phone-number'],
            'address' => $validatedData['address'],
            'city' => $validatedData['city'],
        ]);

        // Create order
        $order = new Order();
        $order->customer_id = $customer->id;
        $order->total_price = 0; // Debugging: Ensure that the total price is being set correctly
        $order->message = $validatedData['additional_data'] ?? null;
        $order->status_order = 'Is being processed';
        $order->save();

        // Debugging: Check if the order was saved correctly
        // dd($order);

        // Redirect to the customer order page
        return redirect()->route('customer.order', ['customer_id' => $customer->id]);
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

    /**
     * Display the checkout page.
     */
    public function showCheckout()
    {
        // Retrieve cart data (assuming it's stored in session)
        $cart = session('cart', []);

        // Populate cart data if it's empty (you might need to adjust this based on your actual implementation)
        if (empty($cart)) {
            // Fetch cart items from your storage (session, database, etc.)
            $cart = $this->fetchCartItems(); // You need to implement this method
        }

        // Calculate total price
        $totalPrice = $this->calculateTotalPrice($cart);

        // Pass cart data and total price to the view
        return view('checkout', compact('cart', 'totalPrice'));
    }

    /**
     * Fetch cart items from storage.
     */
    private function fetchCartItems()
    {
        // Implement your logic to retrieve cart items from your storage (session, database, etc.)
        // For example:
        // $cartItems = session('cart', []);
        // return $cartItems;

        // For now, I'm returning an empty array assuming there are no cart items
        return [];
    }

    /**
     * Calculate total price of items in the cart.
     */
    private function calculateTotalPrice($cart)
    {
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }
        return $totalPrice;
    }
}
