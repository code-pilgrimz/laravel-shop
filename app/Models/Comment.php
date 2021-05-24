<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['body', 'author_id', 'edited'];
    protected $casts = ['body' => 'string', 'author_id' => 'integer', 'edited' => 'boolean'];
}
