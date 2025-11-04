<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralSetup extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        $religions = [
            ['name' => 'Roman Catholic', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Protestant', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Islam', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Buddhism', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hinduism', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Judaism', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Orthodox', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Iglesia ni Cristo', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Aglipayan', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'None', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Other', 'created_at' => $now, 'updated_at' => $now],
        ];

        $existing = DB::table('religions')->pluck('name')->all();
        $toInsert = array_values(array_filter($religions, function ($r) use ($existing) {
            return !in_array($r['name'], $existing, true);
        }));

        if (!empty($toInsert)) {
            DB::table('religions')->insert($toInsert);
        }
    }
}
