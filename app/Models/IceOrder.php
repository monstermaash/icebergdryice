<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IceOrder extends Model
{
  use CrudTrait;
  use HasFactory;

  protected $fillable = ['supplier', 'order_date', 'amount', 'cost'];
}
