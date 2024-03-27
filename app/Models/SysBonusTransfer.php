<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $bonus_transfer_id
 * @property string $bonus_transfer_code
 * @property integer $bonus_transfer_parent_member_id
 * @property integer $bonus_transfer_value
 * @property integer $bonus_transfer_member_bank_id
 * @property string $bonus_transfer_member_bank_name
 * @property string $bonus_transfer_member_bank_account_name
 * @property string $bonus_transfer_member_bank_account_no
 * @property string $bonus_transfer_adm_charge_type
 * @property float $bonus_transfer_adm_charge_percent
 * @property integer $bonus_transfer_adm_charge_value
 * @property integer $bonus_transfer_margin_disbursment
 * @property integer $bonus_transfer_hpp_disbursment
 * @property string $bonus_transfer_tax_type
 * @property float $bonus_transfer_tax_percent
 * @property integer $bonus_transfer_tax_value
 * @property string $bonus_transfer_status
 * @property integer $bonus_transfer_status_administrator_id
 * @property string $bonus_transfer_status_datetime
 * @property string $bonus_transfer_date
 * @property string $bonus_transfer_datetime
 */
class SysBonusTransfer extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_bonus_transfer';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'bonus_transfer_id';

    /**
     * @var array
     */
    protected $fillable = ['bonus_transfer_code', 'bonus_transfer_parent_member_id', 'bonus_transfer_value', 'bonus_transfer_member_bank_id', 'bonus_transfer_member_bank_name', 'bonus_transfer_member_bank_account_name', 'bonus_transfer_member_bank_account_no', 'bonus_transfer_adm_charge_type', 'bonus_transfer_adm_charge_percent', 'bonus_transfer_adm_charge_value', 'bonus_transfer_margin_disbursment', 'bonus_transfer_hpp_disbursment', 'bonus_transfer_tax_type', 'bonus_transfer_tax_percent', 'bonus_transfer_tax_value', 'bonus_transfer_status', 'bonus_transfer_status_administrator_id', 'bonus_transfer_status_datetime', 'bonus_transfer_date', 'bonus_transfer_datetime'];
}
