<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property boolean $serial_type_id
 * @property string $serial_type_prefix
 * @property string $serial_type_name
 * @property integer $serial_type_point
 * @property integer $serial_type_price
 * @property integer $serial_type_bv
 * @property string $serial_type_type
 */
class SysSerialType extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_serial_type';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'serial_type_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'boolean';

    /**
     * @var array
     */
    protected $fillable = ['serial_type_prefix', 'serial_type_name', 'serial_type_point', 'serial_type_price', 'serial_type_bv', 'serial_type_type'];
}
