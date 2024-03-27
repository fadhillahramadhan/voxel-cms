<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $network_upline_member_id
 * @property string $network_upline_arr_data
 */
class SysNetworkUpline extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_network_upline';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'network_upline_member_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['network_upline_arr_data'];
}
