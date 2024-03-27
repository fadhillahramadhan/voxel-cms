<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $notification_id
 * @property string $notification_type
 * @property string $notification_session
 * @property string $notification_content
 * @property string $notification_sender
 * @property string $notification_receiver
 * @property string $notification_response
 * @property string $notification_status
 * @property string $notification_datetime
 */
class LogNotification extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'log_notification';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'notification_id';

    /**
     * @var array
     */
    protected $fillable = ['notification_type', 'notification_session', 'notification_content', 'notification_sender', 'notification_receiver', 'notification_response', 'notification_status', 'notification_datetime'];
}
