<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class StaffController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('admin.dashboard', ['orders' => $orders]);
    }

    public function show($id)
    {
        $order = Order::find($id);

        return view('admin.show', ['order' => $order]);
    }
}
