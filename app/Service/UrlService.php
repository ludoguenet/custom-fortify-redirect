<?php

declare(strict_types=1);

namespace App\Service;

class UrlService
{
    public static function savePreviousUrl(): void
    {
        if (! session()->get('previous_url')) {
            session([
                'previous_url' => url()->previous(),
            ]);
        }
    }

    public static function resolvePreviousUrl(): string
    {
        return session()->get('previous_url');
    }
}
