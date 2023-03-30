<?php

namespace App\Repositories;

use App\Contracts\Repositories\LogRepositoryContract;
use Illuminate\Support\Facades\Log;

class LogRepository implements LogRepositoryContract
{
    public function info(string $message, array $context = []): void
    {
        Log::info($message, $context);
    }

    public function error(string $message, array $context = []): void
    {
        Log::error($message, $context);
    }
}
