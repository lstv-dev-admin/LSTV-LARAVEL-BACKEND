<?php

namespace App\Helpers;

class ImportHelper 
{
    public static function message(array $created, bool $hasDuplicates, string $entity, $isEmpty): array
    {
        if (empty($created) && $hasDuplicates) {
            return [
                'status' => false,
                'created' => $created,
                'message' => "Import complete — all {$entity}s already exist in the system",
            ];
        }

        if ($hasDuplicates) {
            return [
                'status' => true,
                'created' => $created,
                'message' => "Import complete — new areas added, duplicates excluded",
            ];
        }

        if ($isEmpty) {
            return [
                'status' => false,
                'created' => $created,
                'message' => "Import complete — no {$entity} added"
            ];
        }

        return [
            'status' => true,
            'created' => $created,
            'message' => "Import complete — all areas added successfully"
        ];
    }
}