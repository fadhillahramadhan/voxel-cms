<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $royalty_fee_id
 * @property integer $royalty_fee_acc
 * @property integer $royalty_fee_paid
 * @property string $royalty_fee_last_updated_datetime
 */
class ReportRoyaltyFee extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'report_royalty_fee';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'royalty_fee_id';

    /**
     * @var array
     */
    protected $fillable = ['royalty_fee_acc', 'royalty_fee_paid', 'royalty_fee_last_updated_datetime'];
}
