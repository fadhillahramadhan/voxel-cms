<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $gallery_id
 * @property integer $gallery_gallery_category_id
 * @property string $gallery_slug
 * @property string $gallery_title
 * @property string $gallery_description
 * @property string $gallery_type
 * @property string $gallery_file
 * @property integer $gallery_order_by
 * @property boolean $gallery_is_active
 * @property string $gallery_input_datetime
 * @property integer $gallery_input_administrator_id
 */
class SiteGallery extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_gallery';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'gallery_id';

    /**
     * @var array
     */
    protected $fillable = ['gallery_gallery_category_id', 'gallery_slug', 'gallery_title', 'gallery_description', 'gallery_type', 'gallery_file', 'gallery_order_by', 'gallery_is_active', 'gallery_input_datetime', 'gallery_input_administrator_id'];
}
