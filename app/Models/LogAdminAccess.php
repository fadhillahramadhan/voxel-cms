<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $admin_access_id
 * @property integer $admin_access_admin_id
 * @property string $admin_access_session
 * @property string $admin_access_session_created
 * @property string $admin_access_session_expired
 * @property string $admin_access_ip_address
 * @property string $admin_access_login_datetime
 * @property string $admin_access_user_agent
 * @property string $admin_access_platform
 * @property string $admin_access_device
 * @property string $admin_access_app
 */
class LogAdminAccess extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'log_admin_access';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'admin_access_id';

    /**
     * @var array
     */
    protected $fillable = ['admin_access_admin_id', 'admin_access_session', 'admin_access_session_created', 'admin_access_session_expired', 'admin_access_ip_address', 'admin_access_login_datetime', 'admin_access_user_agent', 'admin_access_platform', 'admin_access_device', 'admin_access_app'];
}
