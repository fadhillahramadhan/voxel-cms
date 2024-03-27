<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $netgrow_sponsor_id
 * @property integer $netgrow_sponsor_member_id
 * @property integer $netgrow_sponsor_parent_member_id
 * @property integer $netgrow_sponsor_downline_member_id
 * @property boolean $netgrow_sponsor_point
 * @property integer $netgrow_sponsor_bonus
 * @property string $netgrow_sponsor_date
 * @property string $netgrow_sponsor_datetime
 */
class SysNetgrowSponsor extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_netgrow_sponsor';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'netgrow_sponsor_id';

    /**
     * @var array
     */
    protected $fillable = ['netgrow_sponsor_member_id', 'netgrow_sponsor_parent_member_id', 'netgrow_sponsor_downline_member_id', 'netgrow_sponsor_point', 'netgrow_sponsor_bonus', 'netgrow_sponsor_date', 'netgrow_sponsor_datetime'];
}
