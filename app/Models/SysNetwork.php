<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $network_member_id
 * @property integer $network_parent_member_id
 * @property string $network_code
 * @property integer $network_sponsor_member_id
 * @property string $network_sponsor_network_code
 * @property integer $network_upline_member_id
 * @property string $network_upline_network_code
 * @property integer $network_total_sponsoring
 * @property boolean $network_is_active
 * @property boolean $network_is_suspended
 * @property boolean $network_is_free
 * @property boolean $network_is_use
 * @property string $network_activation_datetime
 * @property integer $network_point
 * @property string $network_slug
 * @property integer $network_left_node_member_id
 * @property integer $network_right_node_member_id
 * @property integer $network_total_node_left
 * @property integer $network_total_node_right
 * @property integer $network_total_point_left
 * @property integer $network_total_point_right
 * @property string $network_position
 * @property string $network_code_migrate
 */
class SysNetwork extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_network';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'network_member_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['network_parent_member_id', 'network_code', 'network_sponsor_member_id', 'network_sponsor_network_code', 'network_upline_member_id', 'network_upline_network_code', 'network_total_sponsoring', 'network_is_active', 'network_is_suspended', 'network_is_free', 'network_is_use', 'network_activation_datetime', 'network_point', 'network_slug', 'network_left_node_member_id', 'network_right_node_member_id', 'network_total_node_left', 'network_total_node_right', 'network_total_point_left', 'network_total_point_right', 'network_position', 'network_code_migrate'];
}
