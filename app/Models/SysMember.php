<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $member_id
 * @property integer $member_parent_member_id
 * @property string $member_name
 * @property string $member_email
 * @property string $member_mobilephone
 * @property string $member_gender
 * @property string $member_birth_place
 * @property string $member_birth_date
 * @property string $member_address
 * @property integer $member_subdistrict_id
 * @property integer $member_city_id
 * @property integer $member_province_id
 * @property integer $member_country_id
 * @property integer $member_bank_id
 * @property string $member_bank_name
 * @property string $member_bank_account_name
 * @property string $member_bank_account_no
 * @property string $member_bank_city
 * @property string $member_bank_branch
 * @property string $member_identity_type
 * @property string $member_identity_no
 * @property string $member_identity_image
 * @property string $member_identity_image_filename
 * @property string $member_tax_no
 * @property string $member_tax_image
 * @property string $member_image
 * @property string $member_image_filename
 * @property string $member_mother_name
 * @property string $member_job
 * @property string $member_devisor_name
 * @property string $member_devisor_relation
 * @property string $member_devisor_mobilephone
 * @property string $member_join_datetime
 * @property string $member_activation_datetime
 * @property string $member_expired_datetime
 * @property boolean $member_is_network
 * @property boolean $member_is_expired
 * @property boolean $member_status
 */
class SysMember extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sys_member';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'member_id';

    /**
     * @var array
     */
    protected $fillable = ['member_parent_member_id', 'member_name', 'member_email', 'member_mobilephone', 'member_gender', 'member_birth_place', 'member_birth_date', 'member_address', 'member_subdistrict_id', 'member_city_id', 'member_province_id', 'member_country_id', 'member_bank_id', 'member_bank_name', 'member_bank_account_name', 'member_bank_account_no', 'member_bank_city', 'member_bank_branch', 'member_identity_type', 'member_identity_no', 'member_identity_image', 'member_identity_image_filename', 'member_tax_no', 'member_tax_image', 'member_image', 'member_image_filename', 'member_mother_name', 'member_job', 'member_devisor_name', 'member_devisor_relation', 'member_devisor_mobilephone', 'member_join_datetime', 'member_activation_datetime', 'member_expired_datetime', 'member_is_network', 'member_is_expired', 'member_status'];
}
