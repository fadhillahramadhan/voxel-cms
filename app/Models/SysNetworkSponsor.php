<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $network_sponsor_member_id
 * @property string $network_sponsor_arr_data
 */
class SysNetworkSponsor extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_network_sponsor';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'network_sponsor_member_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['network_sponsor_arr_data'];
}
