<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $config_id
 * @property string $config_code
 * @property string $config_name
 * @property string $config_value
 */
class SysConfig extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_config';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'config_id';

    /**
     * @var array
     */
    protected $fillable = ['config_code', 'config_name', 'config_value'];
}
