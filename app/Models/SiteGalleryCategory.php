<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $gallery_category_id
 * @property string $gallery_category_title
 * @property string $gallery_category_description
 * @property string $gallery_category_image
 * @property boolean $gallery_category_is_active
 * @property string $gallery_category_input_datetime
 * @property integer $gallery_category_input_administrator_id
 */
class SiteGalleryCategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_gallery_category';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'gallery_category_id';

    /**
     * @var array
     */
    protected $fillable = ['gallery_category_title', 'gallery_category_description', 'gallery_category_image', 'gallery_category_is_active', 'gallery_category_input_datetime', 'gallery_category_input_administrator_id'];
}
