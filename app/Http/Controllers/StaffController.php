<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class StaffController extends Controller
{
    public function index()
    {
        $orders = Customer::all();

        return view('admin.dashboard', ['' => $songs]);
    }
}
