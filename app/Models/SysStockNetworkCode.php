<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $stock_network_code_id
 * @property string $stock_network_code_value
 */
class SysStockNetworkCode extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_stock_network_code';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'stock_network_code_id';

    /**
     * @var array
     */
    protected $fillable = ['stock_network_code_value'];
}
