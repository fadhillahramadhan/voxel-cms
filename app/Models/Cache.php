<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $key
 * @property string $value
 * @property integer $expiration
 */
class Cache extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'cache';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'key';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['value', 'expiration'];
}
