<?php

namespace App\Services;

use App\Contracts\Services\FindUserServiceContract;

class FindUserService implements FindUserServiceContract
{
    public function findByEmail(string $data, array $users): array|null
    {
        return collect($users)->first(function ($user) use ($data) {
            return $user['email'] === $data;
        });
    }
}
