<?php

namespace App\Filament\Resources\ContactInfoResource\Pages;

use App\Filament\Resources\ContactInfoResource;
use Filament\Resources\Pages\ListRecords;
use App\Models\ContactInfo;

class ListContactInfos extends ListRecords
{
    protected static string $resource = ContactInfoResource::class;

    protected function getHeaderActions(): array
    {
        if (ContactInfo::count() === 0) {
            return [
                \Filament\Actions\CreateAction::make(),
            ];
        }

        return [];
    }
}

