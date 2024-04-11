<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class StaffController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('staff.dashboard', ['orders' => $orders]);
    }

    public function show($id)
    {
        $order = Order::find($id);

        return view('staff.show', ['order' => $order]);
    }

    public function update(Request $request, Order $order)
    {
        // Update the status of pizzas
        foreach ($request->pizza_status as $pizzaId => $status) {
            // Zoek de relevante rij in de pivot-tabel 'pizza_order'
            $order->pizzas()->updateExistingPivot($pizzaId, ['status_pizza' => $status]);
        }

        $order->status_order = $request->order_status;
        $order->save();

        // Redirect somewhere after updating
        return redirect()->route('orders.show', ['order' => $order->id]);
    }
}
