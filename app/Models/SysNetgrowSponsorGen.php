<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $netgrow_sponsor_gen_id
 * @property integer $netgrow_sponsor_gen_parent_member_id
 * @property integer $netgrow_sponsor_gen_member_id
 * @property integer $netgrow_sponsor_gen_level
 * @property integer $netgrow_sponsor_gen_downline_member_id
 * @property boolean $netgrow_sponsor_gen_point
 * @property integer $netgrow_sponsor_gen_bonus
 * @property string $netgrow_sponsor_gen_date
 * @property string $netgrow_sponsor_gen_datetime
 */
class SysNetgrowSponsorGen extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_netgrow_sponsor_gen';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'netgrow_sponsor_gen_id';

    /**
     * @var array
     */
    protected $fillable = ['netgrow_sponsor_gen_parent_member_id', 'netgrow_sponsor_gen_member_id', 'netgrow_sponsor_gen_level', 'netgrow_sponsor_gen_downline_member_id', 'netgrow_sponsor_gen_point', 'netgrow_sponsor_gen_bonus', 'netgrow_sponsor_gen_date', 'netgrow_sponsor_gen_datetime'];
}
