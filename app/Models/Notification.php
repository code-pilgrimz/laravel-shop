<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';
    protected $fillable = ['kind', 'message', 'read'];
    protected $casts = ['kind' => 'string', 'message' => 'string', 'read' => 'boolean'];
}
