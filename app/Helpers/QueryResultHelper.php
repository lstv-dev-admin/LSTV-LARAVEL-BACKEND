<?php

namespace App\Helpers;

use Throwable;

class QueryResultHelper
{
    public static function successCreate(string $entity): array
    {
        return [
            'status'  => 'success',
            'message' => "New {$entity} added successfully"
        ];
    }

    public static function successGet($data): array
    {
        return [
            'status' => 'success',
            'data'   => $data
        ];
    }

    public static function successUpdate(string $entity): array
    {
        return [
            'status'  => 'success',
            'message' => "{$entity} updated successfully"
        ];
    }

    public static function error(Throwable $e): array
    {
        return [
            'status'  => 'error',
            'message' => $e->getMessage()
        ];
    }
}
