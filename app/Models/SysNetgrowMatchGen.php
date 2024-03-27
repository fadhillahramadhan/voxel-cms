<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $netgrow_match_gen_id
 * @property integer $netgrow_match_gen_parent_member_id
 * @property integer $netgrow_match_gen_member_id
 * @property integer $netgrow_match_gen_level
 * @property integer $netgrow_match_gen_downline_member_id
 * @property boolean $netgrow_match_gen_point
 * @property integer $netgrow_match_gen_bonus
 * @property string $netgrow_match_gen_date
 * @property string $netgrow_match_gen_datetime
 */
class SysNetgrowMatchGen extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_netgrow_match_gen';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'netgrow_match_gen_id';

    /**
     * @var array
     */
    protected $fillable = ['netgrow_match_gen_parent_member_id', 'netgrow_match_gen_member_id', 'netgrow_match_gen_level', 'netgrow_match_gen_downline_member_id', 'netgrow_match_gen_point', 'netgrow_match_gen_bonus', 'netgrow_match_gen_date', 'netgrow_match_gen_datetime'];
}
