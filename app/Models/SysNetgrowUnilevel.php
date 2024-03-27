<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $netgrow_unilevel_id
 * @property integer $netgrow_unilevel_parent_member_id
 * @property integer $netgrow_unilevel_member_id
 * @property integer $netgrow_unilevel_downline_member_id
 * @property integer $netgrow_unilevel_level
 * @property integer $netgrow_unilevel_value
 * @property float $netgrow_unilevel_percent
 * @property integer $netgrow_unilevel_bonus
 * @property string $netgrow_unilevel_date
 * @property string $netgrow_unilevel_datetime
 */
class SysNetgrowUnilevel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_netgrow_unilevel';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'netgrow_unilevel_id';

    /**
     * @var array
     */
    protected $fillable = ['netgrow_unilevel_parent_member_id', 'netgrow_unilevel_member_id', 'netgrow_unilevel_downline_member_id', 'netgrow_unilevel_level', 'netgrow_unilevel_value', 'netgrow_unilevel_percent', 'netgrow_unilevel_bonus', 'netgrow_unilevel_date', 'netgrow_unilevel_datetime'];
}
