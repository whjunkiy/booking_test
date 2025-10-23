<?php

namespace App\Services;

use App\Models\HuntingBooking;
use Illuminate\Support\Str;

class HuntingBookingService
{
    public function createHuntingBooking(array $data): string
    {
        if ($data['participants_count'] > 10) {
            return 'Too much participants.';
        }

        if (HuntingBooking::where('guide_id', $data['guide_id'])->where('date', $data['date'])->first()) {
            return 'Guide is not available for this date.';
        }

        try {
            HuntingBooking::create([
                'guide_id' => $data['guide_id'],
                'tour_name' => $data['tour_name'],
                'hunter_name' => $data['hunter_name'],
                'participants_count' => $data['participants_count'],
                'date' => $data['date'],
            ]);

            return 'Ok';
        } catch (\Throwable $throwable) {
            return $throwable->getMessage();
        }
    }
}
