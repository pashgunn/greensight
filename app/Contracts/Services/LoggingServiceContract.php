<?php

namespace App\Contracts\Services;

interface LoggingServiceContract
{
    public function logInfo(string $message, array $context = []): void;
    public function logError(string $message, array $context = []): void;
}
