<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SysMember;

/**
 * @property integer $member_account_member_id
 * @property string $member_account_username
 * @property string $member_account_password
 * @property string $member_account_pin
 */
class SysMemberAccount extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_member_account';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'member_account_member_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['member_account_username', 'member_account_password', 'member_account_pin'];

    public function member()
    {
        return $this->belongsTo(SysMember::class, 'member_account_member_id', 'member_id');
    }
}
