<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $guestbook_id
 * @property string $guestbook_name
 * @property string $guestbook_email
 * @property string $guestbook_mobilephone
 * @property string $guestbook_address
 * @property integer $guestbook_province_id
 * @property integer $guestbook_city_id
 * @property boolean $guestbook_status
 * @property string $guestbook_datetime
 * @property integer $guestbook_followup_member_id
 * @property string $guestbook_followup_datetime
 */
class SiteGuestbook extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'site_guestbook';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'guestbook_id';

    /**
     * @var array
     */
    protected $fillable = ['guestbook_name', 'guestbook_email', 'guestbook_mobilephone', 'guestbook_address', 'guestbook_province_id', 'guestbook_city_id', 'guestbook_status', 'guestbook_datetime', 'guestbook_followup_member_id', 'guestbook_followup_datetime'];
}
