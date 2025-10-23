<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Billing
 *
 * @property int $id
 * @property string $name
 * @property integer $billing_type
 * @property boolean $api_key
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @mixin \Eloquent
 * @mixin IdeHelperBilling
 */

class Guide extends Model
{
    protected $fillable = [
        'name',
        'experience_years',
        'is_active',
    ];
}
