<?php

namespace App\Filament\Resources\CompanyLogoResource\Pages;

use App\Filament\Resources\CompanyLogoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyLogo extends EditRecord
{
    protected static string $resource = CompanyLogoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['use_logo_url']) && $data['use_logo_url']) {
            if (!empty($data['logo_url'])) {
                $data['logo'] = $data['logo_url'];
            } elseif (empty($data['logo'])) {
                $data['logo'] = $this->record->logo;
            }
        } elseif (empty($data['logo'])) {
            $data['logo'] = $this->record->logo;
        }
        unset($data['use_logo_url'], $data['logo_url']);
        return $data;
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if (isset($data['logo']) && filter_var($data['logo'], FILTER_VALIDATE_URL)) {
            $data['use_logo_url'] = true;
            $data['logo_url'] = $data['logo'];
            $data['logo'] = null;
        } else {
            $data['use_logo_url'] = false;
            $data['logo_url'] = null;
        }
        return $data;
    }
}
