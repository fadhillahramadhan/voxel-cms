<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $bonus_log_id
 * @property integer $bonus_log_parent_member_id
 * @property integer $bonus_log_member_id
 * @property integer $bonus_log_sponsor
 * @property integer $bonus_log_sponsor_gen
 * @property integer $bonus_log_match
 * @property integer $bonus_log_match_gen
 * @property integer $bonus_log_cashback
 * @property string $bonus_log_date
 * @property string $bonus_log_datetime
 */
class SysBonusLog extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_bonus_log';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'bonus_log_id';

    /**
     * @var array
     */
    protected $fillable = ['bonus_log_parent_member_id', 'bonus_log_member_id', 'bonus_log_sponsor', 'bonus_log_sponsor_gen', 'bonus_log_match', 'bonus_log_match_gen', 'bonus_log_cashback', 'bonus_log_date', 'bonus_log_datetime'];
}
