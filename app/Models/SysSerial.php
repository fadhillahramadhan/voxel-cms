<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $serial_id
 * @property string $serial_pin
 * @property integer $serial_serial_type_id
 * @property string $serial_expired_date
 * @property string $serial_create_datetime
 * @property boolean $serial_is_active
 * @property string $serial_active_datetime
 * @property string $serial_active_ref_type
 * @property integer $serial_active_ref_id
 * @property boolean $serial_is_used
 * @property string $serial_used_datetime
 * @property integer $serial_used_member_id
 * @property string $serial_last_owner_status
 * @property integer $serial_last_owner_ref_id
 * @property string $serial_last_owner_datetime
 */
class SysSerial extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_serial';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'serial_id';

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
    protected $fillable = ['serial_pin', 'serial_serial_type_id', 'serial_expired_date', 'serial_create_datetime', 'serial_is_active', 'serial_active_datetime', 'serial_active_ref_type', 'serial_active_ref_id', 'serial_is_used', 'serial_used_datetime', 'serial_used_member_id', 'serial_last_owner_status', 'serial_last_owner_ref_id', 'serial_last_owner_datetime'];
}
