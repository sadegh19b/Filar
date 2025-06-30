<?php

declare(strict_types=1);

namespace App\Fields;

use App\Fields\Traits\TimestampFlds;

class UserFld
{
    use TimestampFlds;

    public const NAME = 'name';

    public const EMAIL = 'email';

    public const EMAIL_VERIFIED_AT = 'email_verified_at';

    public const PASSWORD = 'password';

    public const REMEMBER_TOKEN = 'remember_token';
}
