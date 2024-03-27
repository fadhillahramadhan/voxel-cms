<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $banner_id
 * @property string $banner_title
 * @property string $banner_label
 * @property string $banner_description
 * @property string $banner_image
 * @property string $banner_image_mobile
 * @property integer $banner_order_by
 * @property boolean $banner_is_active
 */
class SiteBanner extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_banner';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'banner_id';

    /**
     * @var array
     */
    protected $fillable = ['banner_title', 'banner_label', 'banner_description', 'banner_image', 'banner_image_mobile', 'banner_order_by', 'banner_is_active'];
}
