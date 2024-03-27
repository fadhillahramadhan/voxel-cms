<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $administrator_privilege_id
 * @property integer $administrator_privilege_administrator_group_id
 * @property integer $administrator_privilege_administrator_menu_id
 * @property string $administrator_privilege_action
 */
class SiteAdministratorPrivilege extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_administrator_privilege';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'administrator_privilege_id';

    /**
     * @var array
     */
    protected $fillable = ['administrator_privilege_administrator_group_id', 'administrator_privilege_administrator_menu_id', 'administrator_privilege_action'];
}
