<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $transaction_id
 * @property string $transaction_code
 * @property string $transaction_category
 * @property integer $transaction_member_id
 * @property integer $transaction_seller_id
 * @property string $transaction_received_name
 * @property string $transaction_received_address
 * @property string $transaction_received_mobilephone
 * @property integer $transaction_received_province_id
 * @property string $transaction_received_province_name
 * @property integer $transaction_received_city_id
 * @property string $transaction_received_city_name
 * @property integer $transaction_received_subdistrict_city_id
 * @property string $transaction_received_subdistrict_city_name
 * @property string $transaction_bank_transfer_attachment
 * @property integer $transaction_price
 * @property integer $transaction_total_price
 * @property integer $transaction_total_ewallet
 * @property integer $transaction_status
 * @property string $transaction_status_datetime
 * @property string $transaction_expedition_name
 * @property string $transaction_expedition_service
 * @property integer $transaction_expedition_price
 * @property float $transaction_adm_charge
 * @property float $transaction_discount
 * @property string $transaction_notes
 * @property string $transaction_receipt_number
 * @property string $transaction_type
 * @property string $transaction_datetime
 */
class SysTransaction extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_transaction';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'transaction_id';

    /**
     * @var array
     */
    protected $fillable = ['transaction_code', 'transaction_category', 'transaction_member_id', 'transaction_seller_id', 'transaction_received_name', 'transaction_received_address', 'transaction_received_mobilephone', 'transaction_received_province_id', 'transaction_received_province_name', 'transaction_received_city_id', 'transaction_received_city_name', 'transaction_received_subdistrict_city_id', 'transaction_received_subdistrict_city_name', 'transaction_bank_transfer_attachment', 'transaction_price', 'transaction_total_price', 'transaction_total_ewallet', 'transaction_status', 'transaction_status_datetime', 'transaction_expedition_name', 'transaction_expedition_service', 'transaction_expedition_price', 'transaction_adm_charge', 'transaction_discount', 'transaction_notes', 'transaction_receipt_number', 'transaction_type', 'transaction_datetime'];
}
