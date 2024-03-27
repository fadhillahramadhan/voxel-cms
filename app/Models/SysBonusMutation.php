<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $bonus_mutation_id
 * @property integer $bonus_mutation_parent_member_id
 * @property integer $bonus_mutation_member_id
 * @property integer $bonus_mutation_value
 * @property string $bonus_mutation_type
 * @property string $bonus_mutation_note
 * @property string $bonus_mutation_date
 * @property string $bonus_mutation_datetime
 */
class SysBonusMutation extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_bonus_mutation';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'bonus_mutation_id';

    /**
     * @var array
     */
    protected $fillable = ['bonus_mutation_parent_member_id', 'bonus_mutation_member_id', 'bonus_mutation_value', 'bonus_mutation_type', 'bonus_mutation_note', 'bonus_mutation_date', 'bonus_mutation_datetime'];
}
