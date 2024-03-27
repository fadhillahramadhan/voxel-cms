<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $transaction_detail_id
 * @property integer $transaction_detail_transaction_id
 * @property integer $transaction_detail_product_id
 * @property string $transaction_detail_product_code
 * @property string $transaction_detail_product_name
 * @property string $transaction_detail_product_serial_type
 * @property integer $transaction_detail_unit_price
 * @property float $transaction_detail_product_discount
 * @property string $transaction_detail_product_discount_type
 * @property float $transaction_detail_product_admin_charge
 * @property string $transaction_detail_product_admin_charge_type
 * @property integer $transaction_detail_product_weight
 * @property integer $transaction_detail_qty
 */
class SysTransactionDetail extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_transaction_detail';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'transaction_detail_id';

    /**
     * @var array
     */
    protected $fillable = ['transaction_detail_transaction_id', 'transaction_detail_product_id', 'transaction_detail_product_code', 'transaction_detail_product_name', 'transaction_detail_product_serial_type', 'transaction_detail_unit_price', 'transaction_detail_product_discount', 'transaction_detail_product_discount_type', 'transaction_detail_product_admin_charge', 'transaction_detail_product_admin_charge_type', 'transaction_detail_product_weight', 'transaction_detail_qty'];
}
