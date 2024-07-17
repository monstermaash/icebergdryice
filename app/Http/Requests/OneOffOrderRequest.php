<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OneOffOrderRequest extends FormRequest
{
  public function authorize()
  {
    return backpack_auth()->check();
  }

  public function rules()
  {
    return [
      'customer_name' => 'required|string|max:255',
      'order_details' => 'required|string',
      'total_cost' => 'required|numeric|min:0',
    ];
  }
}
