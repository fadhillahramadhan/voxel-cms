<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $netgrow_match_id
 * @property integer $netgrow_match_parent_member_id
 * @property integer $netgrow_match_member_id
 * @property integer $netgrow_match_trigger_member_id
 * @property integer $netgrow_match_bonus
 * @property integer $netgrow_match_point
 * @property string $netgrow_match_date
 * @property string $netgrow_match_datetime
 */
class SysNetgrowMatch extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_netgrow_match';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'netgrow_match_id';

    /**
     * @var array
     */
    protected $fillable = ['netgrow_match_parent_member_id', 'netgrow_match_member_id', 'netgrow_match_trigger_member_id', 'netgrow_match_bonus', 'netgrow_match_point', 'netgrow_match_date', 'netgrow_match_datetime'];
}
