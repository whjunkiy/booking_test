<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HuntingBookingRequest extends FormRequest
{
    public function rules()
    {
        return [
            'guide_id' => 'required|integer',
            'tour_name' => 'required|string|max:256',
            'hunter_name' => 'required|string|max:256',
            'participants_count' => 'required|integer',
            'date' => 'required|string|max:256',
        ];
    }
}