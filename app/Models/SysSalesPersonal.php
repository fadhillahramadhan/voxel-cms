<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $sales_personal_id
 * @property integer $sales_personal_parent_member_id
 * @property integer $sales_personal_member_id
 * @property integer $sales_personal_pin_used_member_id
 * @property integer $sales_personal_value
 * @property integer $sales_personal_total_pin
 * @property boolean $sales_personal_month
 * @property string $sales_personal_year
 * @property string $sales_personal_date
 * @property string $sales_personal_datetime
 */
class SysSalesPersonal extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_sales_personal';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'sales_personal_id';

    /**
     * @var array
     */
    protected $fillable = ['sales_personal_parent_member_id', 'sales_personal_member_id', 'sales_personal_pin_used_member_id', 'sales_personal_value', 'sales_personal_total_pin', 'sales_personal_month', 'sales_personal_year', 'sales_personal_date', 'sales_personal_datetime'];
}
