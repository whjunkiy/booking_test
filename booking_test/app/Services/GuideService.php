<?php

namespace App\Services;

//use Illuminate\Support\Str;

use App\Models\Guide;

class GuideService
{
    public static function getAllActiveGuides(): array
    {
        return Guide::where('is_active', true)->pluck('name', 'id')->toArray();
    }
}
