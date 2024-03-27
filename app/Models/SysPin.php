<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $pin_parent_member_id
 * @property integer $pin_value
 */
class SysPin extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_pin';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'pin_parent_member_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['pin_value'];
}
