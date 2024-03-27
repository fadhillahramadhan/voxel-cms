<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $page_id
 * @property string $page_content
 * @property integer $page_category_id
 * @property string $page_image
 * @property string $page_datetime
 * @property integer $page_order_by
 * @property boolean $page_is_active
 */
class SiteBusinessPage extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_business_page';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'page_id';

    /**
     * @var array
     */
    protected $fillable = ['page_content', 'page_category_id', 'page_image', 'page_datetime', 'page_order_by', 'page_is_active'];
}
