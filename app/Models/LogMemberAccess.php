<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $member_access_id
 * @property integer $member_access_member_id
 * @property string $member_access_session
 * @property string $member_access_session_created
 * @property string $member_access_session_expired
 * @property string $member_access_ip_address
 * @property string $member_access_login_datetime
 * @property string $member_access_user_agent
 * @property string $member_access_platform
 * @property string $member_access_device
 * @property string $member_access_app
 * @property boolean $member_access_is_from_admin
 * @property integer $member_access_administrator_id
 */
class LogMemberAccess extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'log_member_access';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'member_access_id';

    /**
     * @var array
     */
    protected $fillable = ['member_access_member_id', 'member_access_session', 'member_access_session_created', 'member_access_session_expired', 'member_access_ip_address', 'member_access_login_datetime', 'member_access_user_agent', 'member_access_platform', 'member_access_device', 'member_access_app', 'member_access_is_from_admin', 'member_access_administrator_id'];
}
