<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $plan_id
 * @property string $plan_name
 * @property integer $plan_pin
 * @property integer $plan_price
 * @property string $plan_type
 * @property string $plan_netgrow_prefix
 * @property string $plan_color
 * @property integer $plan_sponsor_bonus
 * @property integer $plan_match_bonus
 * @property integer $plan_match_max_flushout
 * @property integer $plan_sponsor_gen_bonus
 * @property integer $plan_sponsor_gen_max_level
 * @property integer $plan_match_gen_bonus
 * @property integer $plan_match_gen_max_level
 */
class SysPlan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_plan';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'plan_id';

    /**
     * @var array
     */
    protected $fillable = ['plan_name', 'plan_pin', 'plan_price', 'plan_type', 'plan_netgrow_prefix', 'plan_color', 'plan_sponsor_bonus', 'plan_match_bonus', 'plan_match_max_flushout', 'plan_sponsor_gen_bonus', 'plan_sponsor_gen_max_level', 'plan_match_gen_bonus', 'plan_match_gen_max_level'];
}
