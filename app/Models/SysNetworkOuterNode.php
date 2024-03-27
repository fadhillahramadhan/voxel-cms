<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $network_outer_node_member_id
 * @property integer $network_outer_node_left_member_id
 * @property integer $network_outer_node_right_member_id
 */
class SysNetworkOuterNode extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_network_outer_node';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'network_outer_node_member_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['network_outer_node_left_member_id', 'network_outer_node_right_member_id'];
}
