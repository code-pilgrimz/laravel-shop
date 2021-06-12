<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';
    protected $fillable = ['number', 'amount', 'currency', 'paid'];
    protected $casts = ['number' => 'string', 'amount' => 'float', 'currency' => 'string', 'paid' => 'boolean'];
}
