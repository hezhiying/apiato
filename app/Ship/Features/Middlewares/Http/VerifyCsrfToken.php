<?php

namespace App\Ship\Features\Middlewares\Http;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

/**
 * Class VerifyCsrfToken
 *
 * A.K.A app/Http/Middleware/VerifyCsrfToken.php
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
