<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IceOrderRequest extends FormRequest
{
  public function authorize()
  {
    return backpack_auth()->check();
  }

  public function rules()
  {
    return [
      'supplier' => 'required|string|max:255',
      'order_date' => 'required|date',
      'amount' => 'required|numeric|min:0',
      'cost' => 'required|numeric|min:0',
    ];
  }
}
