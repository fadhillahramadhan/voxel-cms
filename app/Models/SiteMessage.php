<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $message_id
 * @property string $message_type
 * @property string $message_sender_ref_type
 * @property integer $message_sender_ref_id
 * @property string $message_sender_ref_code
 * @property string $message_sender_ref_name
 * @property string $message_receiver_ref_type
 * @property integer $message_receiver_ref_id
 * @property string $message_receiver_ref_code
 * @property string $message_receiver_ref_name
 * @property string $message_content
 * @property boolean $message_status
 * @property string $message_datetime
 */
class SiteMessage extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_message';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'message_id';

    /**
     * @var array
     */
    protected $fillable = ['message_type', 'message_sender_ref_type', 'message_sender_ref_id', 'message_sender_ref_code', 'message_sender_ref_name', 'message_receiver_ref_type', 'message_receiver_ref_id', 'message_receiver_ref_code', 'message_receiver_ref_name', 'message_content', 'message_status', 'message_datetime'];
}
