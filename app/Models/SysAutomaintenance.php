<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $automaintenance_network_id
 * @property integer $automaintenance_value_acc
 * @property integer $automaintenance_value_paid
 * @property integer $automaintenance_count
 * @property integer $automaintenance_total_match
 */
class SysAutomaintenance extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_automaintenance';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'automaintenance_network_id';

    /**
     * @var array
     */
    protected $fillable = ['automaintenance_value_acc', 'automaintenance_value_paid', 'automaintenance_count', 'automaintenance_total_match'];
}
