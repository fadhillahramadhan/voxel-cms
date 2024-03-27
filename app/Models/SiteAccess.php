<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $access_id
 * @property string $access_role
 * @property boolean $access_is_maintenance
 */
class SiteAccess extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_access';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'access_id';

    /**
     * @var array
     */
    protected $fillable = ['access_role', 'access_is_maintenance'];
}
