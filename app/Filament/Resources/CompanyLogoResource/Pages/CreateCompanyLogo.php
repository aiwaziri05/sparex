<?php

namespace App\Filament\Resources\CompanyLogoResource\Pages;

use App\Filament\Resources\CompanyLogoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCompanyLogo extends CreateRecord
{
    protected static string $resource = CompanyLogoResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['use_logo_url']) && $data['use_logo_url'] && isset($data['logo_url'])) {
            $data['logo'] = $data['logo_url'];
        }
        unset($data['use_logo_url'], $data['logo_url']);
        return $data;
    }
}
