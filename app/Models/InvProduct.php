<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $product_id
 * @property string $product_code
 * @property string $product_name
 * @property integer $product_bv
 * @property integer $product_price
 * @property string $product_type
 * @property integer $product_master_stockist_price
 * @property integer $product_mobile_stockist_price
 * @property integer $product_member_price
 * @property integer $product_weight
 * @property string $product_description
 * @property string $product_image
 * @property string $product_input_datetime
 * @property boolean $product_is_active
 */
class InvProduct extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'inv_product';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'product_id';

    /**
     * @var array
     */
    protected $fillable = ['product_code', 'product_name', 'product_bv', 'product_price', 'product_type', 'product_master_stockist_price', 'product_mobile_stockist_price', 'product_member_price', 'product_weight', 'product_description', 'product_image', 'product_input_datetime', 'product_is_active'];
}
