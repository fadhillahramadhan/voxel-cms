<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $bonus_member_id
 * @property integer $bonus_parent_member_id
 * @property integer $bonus_sponsor_acc
 * @property integer $bonus_sponsor_paid
 * @property integer $bonus_sponsor_gen_acc
 * @property integer $bonus_sponsor_gen_paid
 * @property integer $bonus_match_acc
 * @property integer $bonus_match_paid
 * @property integer $bonus_match_gen_acc
 * @property integer $bonus_match_gen_paid
 * @property integer $bonus_cashback_acc
 * @property integer $bonus_cashback_paid
 */
class SysBonus extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_bonus';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'bonus_member_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['bonus_parent_member_id', 'bonus_sponsor_acc', 'bonus_sponsor_paid', 'bonus_sponsor_gen_acc', 'bonus_sponsor_gen_paid', 'bonus_match_acc', 'bonus_match_paid', 'bonus_match_gen_acc', 'bonus_match_gen_paid', 'bonus_cashback_acc', 'bonus_cashback_paid'];
}
