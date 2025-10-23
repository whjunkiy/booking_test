<?php

namespace App\Http\Controllers\Api;

use App\Services\GuideService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class GuidesController extends Controller
{
    public function getActiveGuides(Request $request): JsonResponse
    {
        try {
            return response()->json(GuideService::getAllActiveGuides(), Response::HTTP_OK);
        } catch (\Throwable $throwable) {
            return response()->json([], Response::$statusTexts[500]);
        }
    }
}
