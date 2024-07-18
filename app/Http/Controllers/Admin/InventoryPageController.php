<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inventory;

class InventoryPageController extends Controller
{
  public function index()
  {
    $entries = Inventory::all();
    return view('admin.inventory', compact('entries'));
  }
}
