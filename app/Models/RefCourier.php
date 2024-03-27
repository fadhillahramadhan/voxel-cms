<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $courier_id
 * @property string $courier_code
 * @property string $courier_name
 * @property string $courier_image
 * @property boolean $courier_is_active
 */
class RefCourier extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ref_courier';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'courier_id';

    /**
     * @var array
     */
    protected $fillable = ['courier_code', 'courier_name', 'courier_image', 'courier_is_active'];
}
