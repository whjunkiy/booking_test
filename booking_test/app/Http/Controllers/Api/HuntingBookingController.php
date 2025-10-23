<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\HuntingBookingRequest;
use App\Services\HuntingBookingService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class HuntingBookingController extends Controller
{
    public function createHuntingBooking(HuntingBookingRequest $request, HuntingBookingService $huntingBookingService): JsonResponse
    {
        $message = $huntingBookingService->createHuntingBooking($request->validated());

        return $message === 'Ok'
            ? response()->json(['message' => 'Hunting booking added.'])
            : response()->json(['message' => 'Failed: ' . $message], Response::HTTP_BAD_REQUEST);
    }
}
