<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $administrator_id
 * @property integer $administrator_administrator_group_id
 * @property string $administrator_username
 * @property string $administrator_password
 * @property string $administrator_name
 * @property string $administrator_email
 * @property string $administrator_image
 * @property string $administrator_last_login
 * @property boolean $administrator_is_active
 */
class SiteAdministrator extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_administrator';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'administrator_id';

    /**
     * @var array
     */
    protected $fillable = ['administrator_administrator_group_id', 'administrator_username', 'administrator_password', 'administrator_name', 'administrator_email', 'administrator_image', 'administrator_last_login', 'administrator_is_active'];
}
