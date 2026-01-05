<?php

namespace App\Filament\Resources\TestimonialResource\Pages;

use App\Filament\Resources\TestimonialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimonial extends EditRecord
{
    protected static string $resource = TestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['use_image_url']) && $data['use_image_url']) {
            if (!empty($data['image_url'])) {
                $data['image'] = $data['image_url'];
            } elseif (empty($data['image'])) {
                $data['image'] = $this->record->image;
            }
        } elseif (empty($data['image'])) {
            $data['image'] = $this->record->image;
        }
        unset($data['use_image_url'], $data['image_url']);
        return $data;
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if (isset($data['image']) && filter_var($data['image'], FILTER_VALIDATE_URL)) {
            $data['use_image_url'] = true;
            $data['image_url'] = $data['image'];
            $data['image'] = null;
        } else {
            $data['use_image_url'] = false;
            $data['image_url'] = null;
        }
        return $data;
    }
}
