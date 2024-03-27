<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $content_category_id
 * @property string $content_category_name
 * @property string $content_category_slug
 * @property boolean $content_category_is_active
 * @property boolean $content_category_is_one
 */
class SiteContentCategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_content_category';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'content_category_id';

    /**
     * @var array
     */
    protected $fillable = ['content_category_name', 'content_category_slug', 'content_category_is_active', 'content_category_is_one'];
}
