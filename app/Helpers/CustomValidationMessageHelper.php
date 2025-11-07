<?php

namespace App\Helpers;

class CustomValidationMessageHelper 
{
    public static function importMessage(array $created, bool $hasDuplicates, string $entity): array
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

        return [
            'status' => true,
            'created' => $created,
            'message' => "Import complete — all areas added successfully"
        ];
    }
}