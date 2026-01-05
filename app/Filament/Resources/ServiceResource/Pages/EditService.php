<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditService extends EditRecord
{
    protected static string $resource = ServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['use_icon_url']) && $data['use_icon_url']) {
            if (!empty($data['icon_url'])) {
                $data['icon'] = $data['icon_url'];
            } elseif (empty($data['icon'])) {
                $data['icon'] = $this->record->icon;
            }
        } elseif (empty($data['icon'])) {
            $data['icon'] = $this->record->icon;
        }
        unset($data['use_icon_url'], $data['icon_url']);
        return $data;
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if (isset($data['icon']) && filter_var($data['icon'], FILTER_VALIDATE_URL)) {
            $data['use_icon_url'] = true;
            $data['icon_url'] = $data['icon'];
            $data['icon'] = null;
        } else {
            $data['use_icon_url'] = false;
            $data['icon_url'] = null;
        }
        return $data;
    }
}
