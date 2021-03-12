<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['email', 'full_name', 'is_active', 'hashed_password'];
    protected $casts = ['email' => 'string', 'full_name' => 'string', 'is_active' => 'boolean', 'hashed_password' => 'string'];
}
