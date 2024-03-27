<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $administrator_group_id
 * @property string $administrator_group_title
 * @property string $administrator_group_type
 * @property boolean $administrator_group_is_active
 */
class SiteAdministratorGroup extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_administrator_group';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'administrator_group_id';

    /**
     * @var array
     */
    protected $fillable = ['administrator_group_title', 'administrator_group_type', 'administrator_group_is_active'];
}
