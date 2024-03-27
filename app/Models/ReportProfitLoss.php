<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $profit_loss_id
 * @property string $profit_loss_date
 * @property integer $profit_loss_income_activation_value
 * @property integer $profit_loss_income_upgrade_value
 * @property integer $profit_loss_income_repeat_order_value
 * @property integer $profit_loss_income_total_value
 * @property integer $profit_loss_payout_sponsor_value
 * @property integer $profit_loss_payout_match_value
 * @property integer $profit_loss_payout_gen_match_value
 * @property integer $profit_loss_payout_b_sponsor_value
 * @property integer $profit_loss_payout_b_reward_value
 * @property integer $profit_loss_payout_profit_sharing_value
 * @property integer $profit_loss_payout_total_value
 * @property integer $profit_loss_cost_cogs
 * @property integer $profit_loss_cost_shipping
 * @property integer $profit_loss_cost_fee_it_value
 * @property integer $profit_loss_cost_total_value
 * @property integer $profit_loss_payout_cost_total_value
 * @property integer $profit_loss_value
 */
class ReportProfitLoss extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'report_profit_loss';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'profit_loss_id';

    /**
     * @var array
     */
    protected $fillable = ['profit_loss_date', 'profit_loss_income_activation_value', 'profit_loss_income_upgrade_value', 'profit_loss_income_repeat_order_value', 'profit_loss_income_total_value', 'profit_loss_payout_sponsor_value', 'profit_loss_payout_match_value', 'profit_loss_payout_gen_match_value', 'profit_loss_payout_b_sponsor_value', 'profit_loss_payout_b_reward_value', 'profit_loss_payout_profit_sharing_value', 'profit_loss_payout_total_value', 'profit_loss_cost_cogs', 'profit_loss_cost_shipping', 'profit_loss_cost_fee_it_value', 'profit_loss_cost_total_value', 'profit_loss_payout_cost_total_value', 'profit_loss_value'];
}
