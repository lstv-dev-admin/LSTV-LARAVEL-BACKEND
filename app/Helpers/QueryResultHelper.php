<?php

namespace App\Helpers;

use Throwable;

class QueryResultHelper
{
    public static function successCreate(string $entity, $data): array
    {
        return [
            'status'  => true,
            'message' => "New {$entity} added successfully",
            'data' => $data
        ];
    }

    public static function successGet($entity, $data): array
    {
        return [
            'status' => true,
            'message' => "{$entity} fetched successfully",
            'data'   => $data
        ];
    }

    public static function successUpdate(string $entity, $updatedData): array
    {
        return [
            'status'  => true,
            'message' => "{$entity} updated successfully",
            'data' => $updatedData
        ];
    }

    public static function successDelete(string $entity): array
    {
        return [
            'status'  => true,
            'message' => "{$entity} deleted successfully",
        ];
    }

    public static function error(Throwable $e): array
    {
        return [
            'status'  => false,
            'message' => $e->getMessage()
        ];
    }

    public static function errorDownload() 
    {
        return [
            'status' => false,
            'message' => 'Failed to download company form'
        ];
    }
}
