<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $product_package_id
 * @property string $product_package_name
 * @property string $product_package_type
 * @property float $product_package_point
 * @property string $product_package_note
 * @property string $product_package_image
 * @property boolean $product_package_is_active
 */
class InvProductPackage extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'inv_product_package';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'product_package_id';

    /**
     * @var array
     */
    protected $fillable = ['product_package_name', 'product_package_type', 'product_package_point', 'product_package_note', 'product_package_image', 'product_package_is_active'];
}
