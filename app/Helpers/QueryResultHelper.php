<?php

namespace App\Helpers;

use Throwable;

class QueryResultHelper
{
    public static function successCreate(string $entity, $data): array
    {
        return [
            'status'  => true,
            'message' => "New {$entity} Added successfully",
            'data' => $data
        ];
    }

    public static function successGet($entity, $data): array
    {
        return [
            'status' => true,
            'message' => "{$entity} Fetched Successfully",
            'data'   => $data
        ];
    }

    public static function successUpdate(string $entity, $updatedData): array
    {
        return [
            'status'  => true,
            'message' => "{$entity} Updated Successfully",
            'data' => $updatedData
        ];
    }

    public static function error(Throwable $e): array
    {
        return [
            'status'  => false,
            'message' => $e->getMessage()
        ];
    }
}
