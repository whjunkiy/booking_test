<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Billing
 *
 * @property int $id
 * @property int $guide_id
 * @property string $tour_name
 * @property string $hunter_name
 * @property integer $participants_count
 * @property string $date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @mixin \Eloquent
 * @mixin IdeHelperBilling
 */

class HuntingBooking extends Model
{
    protected $fillable = [
        'guide_id',
        'tour_name',
        'hunter_name',
        'participants_count',
        'date',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}
