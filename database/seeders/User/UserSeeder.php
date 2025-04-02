<?php

declare(strict_types=1);

namespace Database\Seeders\User;

use App\Fields\UserFields;
use App\Models\User\User;
use Illuminate\Database\Seeder;

final class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            UserFields::NAME => 'Test User',
            UserFields::EMAIL => 'test@example.com',
        ]);
    }
}
