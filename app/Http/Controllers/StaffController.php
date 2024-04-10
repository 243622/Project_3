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
}
