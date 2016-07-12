<?php

namespace App\Portainers\Payments\Exceptions;

use App\Port\Exception\Abstracts\Exception;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

/**
 * Class ObjectNonChargeableException.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
class ObjectNonChargeableException extends Exception
{
    public $httpStatusCode = SymfonyResponse::HTTP_INTERNAL_SERVER_ERROR;

    public $message = 'Internal Error.';
}
