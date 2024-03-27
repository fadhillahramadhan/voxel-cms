<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $netgrow_wait_member_id
 * @property integer $netgrow_wait_parent_member_id
 * @property integer $netgrow_wait_left
 * @property integer $netgrow_wait_right
 */
class SysNetgrowWait extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_netgrow_wait';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'netgrow_wait_member_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['netgrow_wait_parent_member_id', 'netgrow_wait_left', 'netgrow_wait_right'];
}
