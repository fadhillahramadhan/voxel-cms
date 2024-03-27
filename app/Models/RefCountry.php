<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $country_id
 * @property string $country_iso_code
 * @property string $country_phone_code
 * @property string $country_name
 * @property string $country_flag
 * @property string $country_is_active
 */
class RefCountry extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ref_country';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'country_id';

    /**
     * @var array
     */
    protected $fillable = ['country_iso_code', 'country_phone_code', 'country_name', 'country_flag', 'country_is_active'];
}
