<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['label', 'color'];
    protected $casts = ['label' => 'string', 'color' => 'string'];
}
