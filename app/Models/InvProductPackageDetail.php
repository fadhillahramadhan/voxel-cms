<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $product_package_detail_id
 * @property integer $product_package_detail_product_package_id
 * @property integer $product_package_detail_product_id
 * @property integer $product_package_detail_price
 * @property integer $product_package_detail_quantity
 */
class InvProductPackageDetail extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'inv_product_package_detail';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'product_package_detail_id';

    /**
     * @var array
     */
    protected $fillable = ['product_package_detail_product_package_id', 'product_package_detail_product_id', 'product_package_detail_price', 'product_package_detail_quantity'];
}
