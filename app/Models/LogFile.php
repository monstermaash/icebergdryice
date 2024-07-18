<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogFile extends Model
{
  use CrudTrait;
  use HasFactory;

  protected $table = 'logs';
  protected $primaryKey = 'log_id';

  public $incrementing = true;
  protected $keyType = 'int';

  protected $fillable = [
    'user_id',
    'order_id',
    'action_id',
    'timestamp',
  ];

  public $timestamps = false;
}
