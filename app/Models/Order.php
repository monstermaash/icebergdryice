<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'email',
        'phone',
        'amount_of_ice',
        'amount_of_boxes',
        'origin',
        'recurring',
        'location_name',
        'address',
        'unit',
        'city',
        'postal_code',
        'province',
        'country',
        'pickup_delivery',
        'status',
        'delivery_date',
        'notes',
        'total_cost',
    ];
}
