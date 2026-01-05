<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
    
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Handle email verification toggle
        if (isset($data['email_verified']) && $data['email_verified']) {
            $data['email_verified_at'] = now();
        } else {
            $data['email_verified_at'] = null;
        }
        unset($data['email_verified']);
        
        return $data;
    }
}
