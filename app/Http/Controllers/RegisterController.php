<?php

namespace App\Http\Controllers;

use App\Contracts\Services\FindUserServiceContract;
use App\Contracts\Services\LoggingServiceContract;
use App\Http\Requests\RegisterRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;


class RegisterController extends Controller
{
    private array $users = [
        [
            "id" => 2,
            "name" => "Denton Walls",
            "email" => "rytucut@mailinator.com",
        ],
        [
            "id" => 4,
            "name" => "Gideon Olson",
            "email" => "admin@example.com",
        ],
        [
            "id" => 5,
            "name" => "Andrew Leon",
            "email" => "fagaj@mailinator.com",
        ],
        [
            "id" => 6,
            "name" => "Chaney Meadows",
            "email" => "wawycojij@mailinator.com",
        ],
    ];

    public function index(): View
    {
        return view('pages.register');
    }

    public function store(RegisterRequest $request, FindUserServiceContract $findUserService, LoggingServiceContract $loggerService): JsonResponse
    {
        $data = $request->validated();
        $email = $data['email'];
        $user = $findUserService->findByEmail($email, $this->users);
        if ($user) {
            $loggerService->logInfo('Юзер найден', ['email' => $email, 'user_id' => $user['id']]);
        } else {
            $loggerService->logError('Юзер не найден', ['email' => $email]);
        }

        return response()->json(['status' => 'success', 'message' => 'Registration successful!']);
    }
}
