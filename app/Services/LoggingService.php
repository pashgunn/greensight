<?php

namespace App\Services;

use App\Contracts\Repositories\LogRepositoryContract;
use App\Contracts\Services\LoggingServiceContract;

class LoggingService implements LoggingServiceContract
{

    public function __construct(
        private readonly LogRepositoryContract $logRepository
    ) {
    }

    public function logInfo(string $message, array $context = []): void
    {
        $this->logRepository->info($message, $context);
    }

    public function logError(string $message, array $context = []): void
    {
        $this->logRepository->error($message, $context);
    }
}
