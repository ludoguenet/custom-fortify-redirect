<?php

declare(strict_types=1);

namespace App\Responses;

use App\Service\UrlService;
use Laravel\Fortify\Contracts\LoginResponse;
use Laravel\Fortify\Fortify;

class CustomRedirectResponse implements LoginResponse
{
    public function toResponse($request)
    {
        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : response()->redirectTo(UrlService::resolvePreviousUrl());
    }
}
