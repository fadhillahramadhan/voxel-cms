<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $bonus_suffix
 * @property string $period
 * @property boolean $cron_active
 * @property boolean $show_on_bonus_menu
 * @property integer $value
 * @property integer $pin_ratio
 * @property integer $max_level
 */
class MlmConfig extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'mlm_config';

    /**
     * @var array
     */
    protected $fillable = ['name', 'bonus_suffix', 'period', 'cron_active', 'show_on_bonus_menu', 'value', 'pin_ratio', 'max_level'];
}
