<?php

namespace App\Contracts\Repositories;

interface LogRepositoryContract
{
    public function info(string $message, array $context = []): void;
    public function error(string $message, array $context = []): void;
}
