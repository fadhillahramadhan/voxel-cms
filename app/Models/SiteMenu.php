<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $menu_id
 * @property integer $menu_par_id
 * @property integer $menu_content_id
 * @property string $menu_title
 * @property string $menu_link
 * @property integer $menu_order_by
 * @property string $menu_location
 * @property boolean $menu_is_active
 */
class SiteMenu extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_menu';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'menu_id';

    /**
     * @var array
     */
    protected $fillable = ['menu_par_id', 'menu_content_id', 'menu_title', 'menu_link', 'menu_order_by', 'menu_location', 'menu_is_active'];
}
