<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OneOffOrder extends Model
{
  use CrudTrait;
  use HasFactory;

  protected $fillable = ['customer_name', 'order_details', 'total_cost'];
}
