<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $cron_id
 * @property string $cron_name
 * @property string $cron_result
 * @property string $cron_date
 * @property string $cron_datetime_start
 * @property string $cron_datetime_end
 */
class LogCron extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'log_cron';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cron_id';

    /**
     * @var array
     */
    protected $fillable = ['cron_name', 'cron_result', 'cron_date', 'cron_datetime_start', 'cron_datetime_end'];
}
