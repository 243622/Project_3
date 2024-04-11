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
        foreach ($request->pizza_status as $pizzaId => $status) {
            $pizza = $order->pizzas->where('id', $pizzaId)->first();
            if ($pizza) {
                $pizza->status_pizza = $status;
                $pizza->save();
            }
        }

        $order->status_order = $request->order_status;
        $order->save();

        // Redirect somewhere after updating
        return redirect()->route('orders.show', ['order' => $order->id]);
    }
}
