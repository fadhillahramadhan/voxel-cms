<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $city_id
 * @property string $city_province_id
 * @property string $city_name
 * @property string $city_type
 * @property string $city_latitude
 * @property string $city_longitude
 * @property boolean $city_is_active
 */
class RefCity extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ref_city';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'city_id';

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
    protected $fillable = ['city_province_id', 'city_name', 'city_type', 'city_latitude', 'city_longitude', 'city_is_active'];
}
