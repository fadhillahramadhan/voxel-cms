<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $royalty_fee_log_monthly_id
 * @property string $royalty_fee_log_monthly_year_month
 * @property integer $royalty_fee_log_monthly_value_in
 * @property integer $royalty_fee_log_monthly_value_out
 * @property integer $royalty_fee_log_monthly_bill
 * @property integer $royalty_fee_log_monthly_paid
 * @property integer $royalty_fee_log_monthly_unpaid
 * @property string $royalty_fee_log_monthly_status
 * @property integer $royalty_fee_log_monthly_balance
 */
class ReportRoyaltyFeeLogMonthly extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'report_royalty_fee_log_monthly';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'royalty_fee_log_monthly_id';

    /**
     * @var array
     */
    protected $fillable = ['royalty_fee_log_monthly_year_month', 'royalty_fee_log_monthly_value_in', 'royalty_fee_log_monthly_value_out', 'royalty_fee_log_monthly_bill', 'royalty_fee_log_monthly_paid', 'royalty_fee_log_monthly_unpaid', 'royalty_fee_log_monthly_status', 'royalty_fee_log_monthly_balance'];
}
