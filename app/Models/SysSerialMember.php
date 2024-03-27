<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $serial_member_serial_id
 * @property string $serial_member_serial_pin
 * @property string $serial_member_serial_network_code
 * @property boolean $serial_member_serial_type_id
 * @property integer $serial_member_serial_buyer_member_id
 * @property string $serial_member_serial_buy_datetime
 * @property boolean $serial_member_serial_is_active
 * @property boolean $serial_member_serial_is_used
 * @property string $serial_member_serial_expired_date
 * @property string $serial_member_serial_used_datetime
 */
class SysSerialMember extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_serial_member';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'serial_member_serial_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['serial_member_serial_pin', 'serial_member_serial_network_code', 'serial_member_serial_type_id', 'serial_member_serial_buyer_member_id', 'serial_member_serial_buy_datetime', 'serial_member_serial_is_active', 'serial_member_serial_is_used', 'serial_member_serial_expired_date', 'serial_member_serial_used_datetime'];
}
