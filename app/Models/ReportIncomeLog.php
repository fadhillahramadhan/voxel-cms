<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $income_log_id
 * @property string $income_log_type
 * @property integer $income_log_value
 * @property integer $income_log_member_id
 * @property string $income_log_datetime
 */
class ReportIncomeLog extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'report_income_log';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'income_log_id';

    /**
     * @var array
     */
    protected $fillable = ['income_log_type', 'income_log_value', 'income_log_member_id', 'income_log_datetime'];
}
