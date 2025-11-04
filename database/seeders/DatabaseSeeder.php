<?php

namespace Database\Seeders;

// use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\GeneralSetup;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed user_types first to satisfy users.user_type_id FK
        $now = now();
        $userTypes = [
            ['name' => 'Admin', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Manager', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Staff', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Guest', 'created_at' => $now, 'updated_at' => $now],
        ];

        // Insert only missing user_types by name
        $existingTypeNames = DB::table('user_types')->pluck('name')->all();
        $typesToInsert = array_values(array_filter($userTypes, function ($t) use ($existingTypeNames) {
            return !in_array($t['name'], $existingTypeNames, true);
        }));
        if (!empty($typesToInsert)) {
            DB::table('user_types')->insert($typesToInsert);
        }

        // Map user type name -> id
        $typeNameToId = DB::table('user_types')->pluck('id', 'name');

        // Seed at least 5 users
        $users = [
            [
                'username' => 'admin01',
                'user_type_id' => $typeNameToId['Admin'] ?? $typeNameToId->first(),
                'first_name' => 'Alice',
                'middle_name' => null,
                'last_name' => 'Admin',
                'email' => 'alice.admin@example.com',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'username' => 'manager01',
                'user_type_id' => $typeNameToId['Manager'] ?? $typeNameToId->first(),
                'first_name' => 'Bob',
                'middle_name' => null,
                'last_name' => 'Manager',
                'email' => 'bob.manager@example.com',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'username' => 'staff01',
                'user_type_id' => $typeNameToId['Staff'] ?? $typeNameToId->first(),
                'first_name' => 'Carol',
                'middle_name' => null,
                'last_name' => 'Staff',
                'email' => 'carol.staff@example.com',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'username' => 'staff02',
                'user_type_id' => $typeNameToId['Staff'] ?? $typeNameToId->first(),
                'first_name' => 'David',
                'middle_name' => null,
                'last_name' => 'Worker',
                'email' => 'david.worker@example.com',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'username' => 'guest01',
                'user_type_id' => $typeNameToId['Guest'] ?? $typeNameToId->first(),
                'first_name' => 'Eve',
                'middle_name' => null,
                'last_name' => 'Guest',
                'email' => 'eve.guest@example.com',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        // Insert users if their usernames do not already exist
        $existingUsernames = DB::table('users')->pluck('username')->all();
        $usersToInsert = array_values(array_filter($users, function ($u) use ($existingUsernames) {
            return !in_array($u['username'], $existingUsernames, true);
        }));

        if (!empty($usersToInsert)) {
            DB::table('users')->insert($usersToInsert);
        }

        // Seed general setup data (e.g., religions)
        $this->call(GeneralSetup::class);
    }
}
