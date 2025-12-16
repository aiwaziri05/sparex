<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\NewsletterService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function __construct(protected NewsletterService $newsletter)
    {
    }

    public function subscribe(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email:rfc,dns'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Please enter a valid email address.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $email = $validator->validated()['email'];

        try {
            $this->newsletter->subscribe($email);

            return response()->json([
                'message' => 'Thank you for subscribing! Please check your email to confirm.',
            ]);
        } catch (\Throwable $e) {
            report($e);

            return response()->json([
                'message' => 'Subscription failed, please try again.',
            ], 500);
        }
    }
}


