<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = ['amount', 'provider', 'status', 'reference'];
    protected $casts = ['amount' => 'float', 'provider' => 'string', 'status' => 'string', 'reference' => 'string'];
}
