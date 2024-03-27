<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $reward_point_member_id
 * @property integer $reward_point_left
 * @property integer $reward_point_right
 */
class SysRewardPoint extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_reward_point';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'reward_point_member_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['reward_point_left', 'reward_point_right'];
}
