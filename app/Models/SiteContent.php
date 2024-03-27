<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $content_id
 * @property integer $content_content_category_id
 * @property string $content_keyword
 * @property string $content_description
 * @property string $content_slug
 * @property string $content_title
 * @property string $content_body
 * @property string $content_image
 * @property boolean $content_is_active
 * @property string $content_input_datetime
 * @property integer $content_input_administrator_id
 */
class SiteContent extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_content';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'content_id';

    /**
     * @var array
     */
    protected $fillable = ['content_content_category_id', 'content_keyword', 'content_description', 'content_slug', 'content_title', 'content_body', 'content_image', 'content_is_active', 'content_input_datetime', 'content_input_administrator_id'];
}
