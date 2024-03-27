<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $province_id
 * @property string $province_name
 * @property string $province_latitude
 * @property string $province_longitude
 * @property string $province_is_active
 */
class RefProvince extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ref_province';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'province_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['province_name', 'province_latitude', 'province_longitude', 'province_is_active'];
}
