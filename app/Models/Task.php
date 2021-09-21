<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['title', 'priority', 'done', 'due_date'];
    protected $casts = ['title' => 'string', 'priority' => 'integer', 'done' => 'boolean', 'due_date' => 'string'];
}
// wip: error-message
