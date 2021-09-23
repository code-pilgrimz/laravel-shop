<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    protected $table = 'audit_logs';
    protected $fillable = ['action', 'actor_id', 'target'];
    protected $casts = ['action' => 'string', 'actor_id' => 'integer', 'target' => 'string'];
}
