<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $onebrick_profit_id
 * @property string $onebrick_profit_transfer_code
 * @property string $onebrick_profit_bank_account_name
 * @property string $onebrick_profit_bank_account_no
 * @property float $onebrick_profit_adm_charge_percent
 * @property integer $onebrick_profit_adm_charge_value
 * @property integer $onebrick_profit_subtotal
 * @property integer $onebrick_profit_total
 * @property integer $onebrick_profit_bank_id
 * @property string $onebrick_profit_note
 * @property string $onebrick_profit_datetime
 * @property string $onebrick_profit_status
 * @property integer $onebrick_profit_status_administrator_id
 * @property string $onebrick_profit_status_datetime
 */
class OnebrickProfit extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'onebrick_profit';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'onebrick_profit_id';

    /**
     * @var array
     */
    protected $fillable = ['onebrick_profit_transfer_code', 'onebrick_profit_bank_account_name', 'onebrick_profit_bank_account_no', 'onebrick_profit_adm_charge_percent', 'onebrick_profit_adm_charge_value', 'onebrick_profit_subtotal', 'onebrick_profit_total', 'onebrick_profit_bank_id', 'onebrick_profit_note', 'onebrick_profit_datetime', 'onebrick_profit_status', 'onebrick_profit_status_administrator_id', 'onebrick_profit_status_datetime'];
}
