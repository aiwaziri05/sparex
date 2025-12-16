<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NewsletterService
{
    public function subscribe(string $email): void
    {
        $apiKey = config('newsletter.mailchimp.api_key');
        $listId = config('newsletter.mailchimp.list_id');
        $serverPrefix = config('newsletter.mailchimp.server_prefix');

        if (!$apiKey || !$listId || !$serverPrefix) {
            Log::warning('NewsletterService: Mailchimp configuration is missing.');
            return;
        }

        $endpoint = "https://{$serverPrefix}.api.mailchimp.com/3.0/lists/{$listId}/members";

        $response = Http::withBasicAuth('anystring', $apiKey)->post($endpoint, [
            'email_address' => $email,
            'status' => 'pending', // double opt-in
        ]);

        if ($response->failed()) {
            Log::error('NewsletterService: Mailchimp subscription failed', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            throw new \RuntimeException('Unable to subscribe email to newsletter.');
        }
    }
}


