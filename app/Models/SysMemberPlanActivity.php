<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $member_plan_activity_id
 * @property integer $member_plan_activity_parent_member_id
 * @property integer $member_plan_activity_plan_id
 * @property integer $member_plan_activity_member_id
 * @property integer $member_plan_activity_value
 * @property string $member_plan_activity_type
 * @property string $member_plan_activity_note
 * @property string $member_plan_activity_datetime
 */
class SysMemberPlanActivity extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_member_plan_activity';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'member_plan_activity_id';

    /**
     * @var array
     */
    protected $fillable = ['member_plan_activity_parent_member_id', 'member_plan_activity_plan_id', 'member_plan_activity_member_id', 'member_plan_activity_value', 'member_plan_activity_type', 'member_plan_activity_note', 'member_plan_activity_datetime'];
}
