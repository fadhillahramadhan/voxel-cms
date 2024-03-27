<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $royalty_fee_log_id
 * @property integer $royalty_fee_log_value
 * @property string $royalty_fee_log_type
 * @property string $royalty_fee_log_note
 * @property string $royalty_fee_log_input_datetime
 * @property integer $royalty_fee_log_input_administrator_id
 */
class ReportRoyaltyFeeLog extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'report_royalty_fee_log';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'royalty_fee_log_id';

    /**
     * @var array
     */
    protected $fillable = ['royalty_fee_log_value', 'royalty_fee_log_type', 'royalty_fee_log_note', 'royalty_fee_log_input_datetime', 'royalty_fee_log_input_administrator_id'];
}
