<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $member_update_id
 * @property integer $member_update_member_id
 * @property string $member_update_network_code
 * @property string $member_update_type
 * @property string $member_update_page
 * @property string $member_update_username
 * @property string $member_update_name
 * @property string $member_update_change
 * @property string $member_update_query
 * @property string $member_update_note
 * @property string $member_update_datetime
 */
class LogMemberUpdate extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'log_member_update';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'member_update_id';

    /**
     * @var array
     */
    protected $fillable = ['member_update_member_id', 'member_update_network_code', 'member_update_type', 'member_update_page', 'member_update_username', 'member_update_name', 'member_update_change', 'member_update_query', 'member_update_note', 'member_update_datetime'];
}
