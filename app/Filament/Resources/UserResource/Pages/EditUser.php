<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    
    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Handle email verification toggle
        if (isset($data['email_verified']) && $data['email_verified']) {
            $data['email_verified_at'] = now();
        } elseif (isset($data['email_verified']) && !$data['email_verified']) {
            $data['email_verified_at'] = null;
        }
        unset($data['email_verified']);
        
        return $data;
    }
}
