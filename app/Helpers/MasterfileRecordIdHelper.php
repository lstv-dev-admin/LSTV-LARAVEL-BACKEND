<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

use App\Models\MasterfileRecordIdSeries;

class MasterfileRecordIdHelper 
{
    public static function getNextSeries(string $masterfileCode): string
    {
        return DB::transaction(function () use ($masterfileCode) {
            $record = MasterfileRecordIdSeries::where('masterfile_code', $masterfileCode)
                ->lockForUpdate()
                ->first();

            if (!$record) {
                throw new \Exception("Masterfile Code Not Found: {$masterfileCode}");
            }

            $currentSeries = $record->next_series;

            $number = (int) str_replace("{$masterfileCode}-", '', $currentSeries);
            $nextNumber = $number + 1;

            $newSeries = sprintf('%s-%016d', $masterfileCode, $nextNumber);

            $record->next_series = $newSeries;
            $record->save();

            return $currentSeries;
        });
    }
}