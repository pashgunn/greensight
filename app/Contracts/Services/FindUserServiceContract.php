<?php

namespace App\Contracts\Services;

interface FindUserServiceContract
{
    public function findByEmail(string $data, array $users): array|null;
}
