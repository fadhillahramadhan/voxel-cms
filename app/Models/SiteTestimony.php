<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $testimony_id
 * @property integer $testimony_member_id
 * @property string $testimony_network_code
 * @property string $testimony_content
 * @property boolean $testimony_is_publish
 * @property string $testimony_date
 */
class SiteTestimony extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_testimony';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'testimony_id';

    /**
     * @var array
     */
    protected $fillable = ['testimony_member_id', 'testimony_network_code', 'testimony_content', 'testimony_is_publish', 'testimony_date'];
}
