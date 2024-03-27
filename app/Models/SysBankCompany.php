<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $bank_company_id
 * @property integer $bank_company_bank_id
 * @property string $bank_company_bank_acc_name
 * @property string $bank_company_bank_acc_number
 * @property boolean $bank_company_bank_is_active
 */
class SysBankCompany extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_bank_company';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'bank_company_id';

    /**
     * @var array
     */
    protected $fillable = ['bank_company_bank_id', 'bank_company_bank_acc_name', 'bank_company_bank_acc_number', 'bank_company_bank_is_active'];
}
