<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\SignUpValidator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $validator;

    public function __construct(SignUpValidator $validator)
    {
        $this->validator = $validator;
    }

    public function signUp(Request $request)
    {
        $this->validator->validate($request->all());

        $user = User::create($request->all());

        // Send welcome email
        // $this->sendWelcomeEmail($user);

        return response()->json(['message' => 'User signed up successfully'], 201);
    }

    private function sendWelcomeEmail(User $user)
    {
        // Email sending logic based on user role
    }
}

