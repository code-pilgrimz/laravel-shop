<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['name', 'description', 'status', 'archived'];
    protected $casts = ['name' => 'string', 'description' => 'string', 'status' => 'string', 'archived' => 'boolean'];
}
// wip: stale-cache
