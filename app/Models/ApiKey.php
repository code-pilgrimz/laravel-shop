<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    protected $table = 'api_keys';
    protected $fillable = ['name', 'prefix', 'revoked'];
    protected $casts = ['name' => 'string', 'prefix' => 'string', 'revoked' => 'boolean'];
}
