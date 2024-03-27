<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $member_otp_id
 * @property integer $member_otp_member_id
 * @property integer $member_otp_value
 * @property string $member_otp_expired_datetime
 */
class SysMemberOtp extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_member_otp';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'member_otp_id';

    /**
     * @var array
     */
    protected $fillable = ['member_otp_member_id', 'member_otp_value', 'member_otp_expired_datetime'];
}
