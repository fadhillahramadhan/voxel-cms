<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $bank_id
 * @property string $bank_code
 * @property string $bank_name
 * @property string $bank_logo
 * @property boolean $bank_can_disburse
 * @property boolean $bank_can_name_validate
 * @property boolean $bank_is_active
 */
class RefBank extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ref_bank';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'bank_id';

    /**
     * @var array
     */
    protected $fillable = ['bank_code', 'bank_name', 'bank_logo', 'bank_can_disburse', 'bank_can_name_validate', 'bank_is_active'];
}
