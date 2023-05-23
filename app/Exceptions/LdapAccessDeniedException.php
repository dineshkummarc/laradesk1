<?php

namespace App\Exceptions;

class LdapAccessDeniedException extends \Exception
{
    public function __construct(string $message = "You want pass", int $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
