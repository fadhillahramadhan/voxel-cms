<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $netgrow_node_id
 * @property integer $netgrow_node_member_id
 * @property integer $netgrow_node_parent_member_id
 * @property integer $netgrow_node_downline_member_id
 * @property boolean $netgrow_node_point
 * @property string $netgrow_node_position
 * @property integer $netgrow_node_level
 * @property string $netgrow_node_date
 * @property string $netgrow_node_datetime
 */
class SysNetgrowNode extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_netgrow_node';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'netgrow_node_id';

    /**
     * @var array
     */
    protected $fillable = ['netgrow_node_member_id', 'netgrow_node_parent_member_id', 'netgrow_node_downline_member_id', 'netgrow_node_point', 'netgrow_node_position', 'netgrow_node_level', 'netgrow_node_date', 'netgrow_node_datetime'];
}
