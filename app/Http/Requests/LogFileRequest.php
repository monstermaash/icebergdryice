<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogFileRequest extends FormRequest
{
  public function authorize()
  {
    return backpack_auth()->check();
  }

  public function rules()
  {
    return [
      'file_name' => 'required|string|max:255',
    ];
  }
}
