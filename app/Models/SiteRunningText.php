<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $running_text_id
 * @property string $running_text_description
 * @property boolean $running_text_is_active
 */
class SiteRunningText extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_running_text';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'running_text_id';

    /**
     * @var array
     */
    protected $fillable = ['running_text_description', 'running_text_is_active'];
}
