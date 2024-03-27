<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $reward_id
 * @property string $reward_title
 * @property string $reward_description
 * @property string $reward_image_filename
 * @property string $reward_image
 * @property string $reward_value
 * @property integer $reward_condition_sponsor
 * @property float $reward_condition_point_left
 * @property float $reward_condition_point_right
 * @property integer $reward_condition_rank_id
 * @property boolean $reward_is_active
 */
class SysReward extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_reward';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'reward_id';

    /**
     * @var array
     */
    protected $fillable = ['reward_title', 'reward_description', 'reward_image_filename', 'reward_image', 'reward_value', 'reward_condition_sponsor', 'reward_condition_point_left', 'reward_condition_point_right', 'reward_condition_rank_id', 'reward_is_active'];
}
