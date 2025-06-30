<?php

namespace Database\Seeders;

use App\Fields\UserFld;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::query()->create([
            UserFld::NAME => 'Test User',
            UserFld::EMAIL => 'test@example.com',
            UserFld::EMAIL_VERIFIED_AT => now(),
            UserFld::PASSWORD => 'test',
        ]);
    }
}
