<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $package_id
 * @property string $package_name
 * @property integer $package_price
 * @property integer $package_point
 */
class SysPackage extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_package';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'package_id';

    /**
     * @var array
     */
    protected $fillable = ['package_name', 'package_price', 'package_point'];
}
