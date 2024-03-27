<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $bonus_parent_member_id
 * @property integer $bonus_parent_sponsor_acc
 * @property integer $bonus_parent_sponsor_paid
 * @property integer $bonus_parent_sponsor_gen_acc
 * @property integer $bonus_parent_sponsor_gen_paid
 * @property integer $bonus_parent_match_acc
 * @property integer $bonus_parent_match_paid
 * @property integer $bonus_parent_match_gen_acc
 * @property integer $bonus_parent_match_gen_paid
 * @property integer $bonus_parent_cashback_acc
 * @property integer $bonus_parent_cashback_paid
 * @property integer $bonus_parent_acc
 * @property integer $bonus_parent_paid
 * @property integer $bonus_parent_limit
 */
class SysBonusParent extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_bonus_parent';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'bonus_parent_member_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['bonus_parent_sponsor_acc', 'bonus_parent_sponsor_paid', 'bonus_parent_sponsor_gen_acc', 'bonus_parent_sponsor_gen_paid', 'bonus_parent_match_acc', 'bonus_parent_match_paid', 'bonus_parent_match_gen_acc', 'bonus_parent_match_gen_paid', 'bonus_parent_cashback_acc', 'bonus_parent_cashback_paid', 'bonus_parent_acc', 'bonus_parent_paid', 'bonus_parent_limit'];
}
