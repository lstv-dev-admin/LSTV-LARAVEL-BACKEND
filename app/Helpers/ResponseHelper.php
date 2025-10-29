<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;

class ResponseHelper
{
    public static function respond(array $result): JsonResponse
    {
        return response()->json($result);
    }
}
