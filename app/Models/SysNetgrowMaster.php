<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $netgrow_master_id
 * @property integer $netgrow_master_member_id
 * @property integer $netgrow_master_node_left
 * @property integer $netgrow_master_node_right
 * @property integer $netgrow_master_wait_left
 * @property integer $netgrow_master_wait_right
 * @property integer $netgrow_master_match
 * @property integer $netgrow_master_match_real
 * @property integer $netgrow_master_match_bonus
 * @property string $netgrow_master_date
 * @property integer $netgrow_master_node_left_node
 * @property integer $netgrow_master_node_right_node
 * @property integer $netgrow_master_wait_left_node
 * @property integer $netgrow_master_wait_right_node
 * @property integer $netgrow_master_point_left
 * @property integer $netgrow_master_point_right
 */
class SysNetgrowMaster extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_netgrow_master';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'netgrow_master_id';

    /**
     * @var array
     */
    protected $fillable = ['netgrow_master_member_id', 'netgrow_master_node_left', 'netgrow_master_node_right', 'netgrow_master_wait_left', 'netgrow_master_wait_right', 'netgrow_master_match', 'netgrow_master_match_real', 'netgrow_master_match_bonus', 'netgrow_master_date', 'netgrow_master_node_left_node', 'netgrow_master_node_right_node', 'netgrow_master_wait_left_node', 'netgrow_master_wait_right_node', 'netgrow_master_point_left', 'netgrow_master_point_right'];
}
