<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $sales_group_id
 * @property integer $sales_group_sales_personal_id
 * @property integer $sales_group_parent_member_id
 * @property integer $sales_group_member_id
 * @property integer $sales_group_trigger_member_id
 * @property boolean $sales_group_month
 * @property string $sales_group_year
 * @property integer $sales_group_level_real
 * @property string $sales_group_position
 * @property string $sales_group_real_position
 * @property string $sales_group_date
 * @property integer $sales_group_value
 * @property integer $sales_group_point
 */
class SysSalesGroup extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_sales_group';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'sales_group_id';

    /**
     * @var array
     */
    protected $fillable = ['sales_group_sales_personal_id', 'sales_group_parent_member_id', 'sales_group_member_id', 'sales_group_trigger_member_id', 'sales_group_month', 'sales_group_year', 'sales_group_level_real', 'sales_group_position', 'sales_group_real_position', 'sales_group_date', 'sales_group_value', 'sales_group_point'];
}
