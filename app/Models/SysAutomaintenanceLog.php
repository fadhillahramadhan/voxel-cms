<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $automaintenance_log_id
 * @property integer $automaintenance_log_network_id
 * @property integer $automaintenance_log_value
 * @property integer $automaintenance_log_circle
 * @property integer $automaintenance_log_total_match
 * @property string $automaintenance_log_type
 * @property string $automaintenance_log_date
 */
class SysAutomaintenanceLog extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_automaintenance_log';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'automaintenance_log_id';

    /**
     * @var array
     */
    protected $fillable = ['automaintenance_log_network_id', 'automaintenance_log_value', 'automaintenance_log_circle', 'automaintenance_log_total_match', 'automaintenance_log_type', 'automaintenance_log_date'];
}
