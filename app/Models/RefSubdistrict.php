<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $subdistrict_id
 * @property string $subdistrict_city_id
 * @property string $subdistrict_name
 * @property string $subdistrict_latitude
 * @property string $subdistrict_longitude
 */
class RefSubdistrict extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ref_subdistrict';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'subdistrict_id';

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
    protected $fillable = ['subdistrict_city_id', 'subdistrict_name', 'subdistrict_latitude', 'subdistrict_longitude'];
}
