<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['use_icon_url']) && $data['use_icon_url'] && isset($data['icon_url'])) {
            $data['icon'] = $data['icon_url'];
        }
        unset($data['use_icon_url'], $data['icon_url']);
        return $data;
    }
}
