<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $reward_qualified_id
 * @property integer $reward_qualified_parent_member_id
 * @property integer $reward_qualified_member_id
 * @property integer $reward_qualified_reward_id
 * @property string $reward_qualified_reward_title
 * @property integer $reward_qualified_reward_value
 * @property integer $reward_qualified_condition_sponsor
 * @property float $reward_qualified_condition_point_left
 * @property float $reward_qualified_condition_point_right
 * @property float $reward_qualified_condition_point
 * @property integer $reward_qualified_condition_rank_id
 * @property string $reward_qualified_datetime
 * @property string $reward_qualified_status
 * @property integer $reward_qualified_status_administrator_id
 * @property string $reward_qualified_status_datetime
 * @property string $reward_qualified_claim
 * @property string $reward_qualified_claim_datetime
 */
class SysRewardQualified extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_reward_qualified';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'reward_qualified_id';

    /**
     * @var array
     */
    protected $fillable = ['reward_qualified_parent_member_id', 'reward_qualified_member_id', 'reward_qualified_reward_id', 'reward_qualified_reward_title', 'reward_qualified_reward_value', 'reward_qualified_condition_sponsor', 'reward_qualified_condition_point_left', 'reward_qualified_condition_point_right', 'reward_qualified_condition_point', 'reward_qualified_condition_rank_id', 'reward_qualified_datetime', 'reward_qualified_status', 'reward_qualified_status_administrator_id', 'reward_qualified_status_datetime', 'reward_qualified_claim', 'reward_qualified_claim_datetime'];
}
