<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $name
 * @property integer $total_jobs
 * @property integer $pending_jobs
 * @property integer $failed_jobs
 * @property string $failed_job_ids
 * @property string $options
 * @property integer $cancelled_at
 * @property integer $created_at
 * @property integer $finished_at
 */
class JobBatch extends Model
{
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
    protected $fillable = ['name', 'total_jobs', 'pending_jobs', 'failed_jobs', 'failed_job_ids', 'options', 'cancelled_at', 'created_at', 'finished_at'];
}
