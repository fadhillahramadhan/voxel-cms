<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $queue
 * @property string $payload
 * @property boolean $attempts
 * @property integer $reserved_at
 * @property integer $available_at
 * @property integer $created_at
 */
class Job extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['queue', 'payload', 'attempts', 'reserved_at', 'available_at', 'created_at'];
}
