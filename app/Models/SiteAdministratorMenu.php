<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $administrator_menu_id
 * @property integer $administrator_menu_par_id
 * @property string $administrator_menu_title
 * @property string $administrator_menu_description
 * @property string $administrator_menu_link
 * @property string $administrator_menu_action
 * @property string $administrator_menu_icon
 * @property string $administrator_menu_class
 * @property integer $administrator_menu_order_by
 * @property boolean $administrator_menu_is_active
 */
class SiteAdministratorMenu extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_administrator_menu';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'administrator_menu_id';

    /**
     * @var array
     */
    protected $fillable = ['administrator_menu_par_id', 'administrator_menu_title', 'administrator_menu_description', 'administrator_menu_link', 'administrator_menu_action', 'administrator_menu_icon', 'administrator_menu_class', 'administrator_menu_order_by', 'administrator_menu_is_active'];
}
