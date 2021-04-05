<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'organizations';
    protected $fillable = ['name', 'slug', 'plan', 'seats'];
    protected $casts = ['name' => 'string', 'slug' => 'string', 'plan' => 'string', 'seats' => 'integer'];
}
