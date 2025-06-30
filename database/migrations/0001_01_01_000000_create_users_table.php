<?php

declare(strict_types=1);

use App\Fields\UserFld;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table): void {
            $table->id();
            $table->string(UserFld::NAME);
            $table->string(UserFld::EMAIL)->unique();
            $table->timestamp(UserFld::EMAIL_VERIFIED_AT)->nullable();
            $table->string(UserFld::PASSWORD);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
