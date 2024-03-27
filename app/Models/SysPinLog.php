<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $pin_log_id
 * @property integer $pin_log_parent_member_id
 * @property integer $pin_log_value
 * @property string $pin_log_type
 * @property string $pin_log_note
 * @property string $pin_log_date
 * @property string $pin_log_datetime
 */
class SysPinLog extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_pin_log';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'pin_log_id';

    /**
     * @var array
     */
    protected $fillable = ['pin_log_parent_member_id', 'pin_log_value', 'pin_log_type', 'pin_log_note', 'pin_log_date', 'pin_log_datetime'];
}
