<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class DashboardController extends Controller
{
  public function index()
  {
    $lastOrders = Order::orderBy('delivery_date', 'desc')->take(5)->get();
    $ccOrders = Order::where('origin', 'CC')->take(5)->get();
    $recurringOrders = Order::where('recurring', 'recurring')->take(5)->get();

    return view('vendor.backpack.base.dashboard', compact('lastOrders', 'ccOrders', 'recurringOrders'));
  }
}
