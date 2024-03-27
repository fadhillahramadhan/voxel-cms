<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $village_id
 * @property string $village_subdistrict_id
 * @property string $village_name
 * @property string $village_latitude
 * @property string $village_longitude
 */
class RefVillage extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ref_village';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'village_id';

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
    protected $fillable = ['village_subdistrict_id', 'village_name', 'village_latitude', 'village_longitude'];
}
