<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{

    use HasUuids;
    protected $fillable = ['user_id', 'type', 'message', 'status', 'retries', 'read_at'];
}
