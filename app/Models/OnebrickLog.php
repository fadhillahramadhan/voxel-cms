<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $onebrick_id
 * @property string $onebrick_bonus_transfer_code
 * @property string $onebrick_ref_id
 * @property string $onebrick_response
 * @property string $onebrick_status
 * @property string $onebrick_status_request
 * @property string $onebrick_datetime
 */
class OnebrickLog extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'onebrick_log';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'onebrick_id';

    /**
     * @var array
     */
    protected $fillable = ['onebrick_bonus_transfer_code', 'onebrick_ref_id', 'onebrick_response', 'onebrick_status', 'onebrick_status_request', 'onebrick_datetime'];
}
