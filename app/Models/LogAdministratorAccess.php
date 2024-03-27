<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $administrator_access_id
 * @property integer $administrator_access_administrator_id
 * @property string $administrator_access_token
 * @property string $administrator_access_ip_address
 * @property string $administrator_access_login_datetime
 * @property string $administrator_access_logout_datetime
 */
class LogAdministratorAccess extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'log_administrator_access';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'administrator_access_id';

    /**
     * @var array
     */
    protected $fillable = ['administrator_access_administrator_id', 'administrator_access_token', 'administrator_access_ip_address', 'administrator_access_login_datetime', 'administrator_access_logout_datetime'];
}
